<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(){
        if (!Auth::check()) {
            $rules = [
                'email' => 'required',
                'password' => 'required',
            ];

            $validate = Validator::make(request()->post(), $rules);

            if($validate->fails()){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Bad request',
                ], 400);
            }

            if (! $token = auth()->attempt(["email" => request()->post("email"), "password" => request()->post("password")])) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Successfully',
                'data' => [
                    'token' => [
                        'access_token' => $token,
                        'token_type' => 'bearer',
                    ],
                ]
            ], 200);
        }

    }
}
