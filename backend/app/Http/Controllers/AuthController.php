<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function login(){
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

        try {
            if (! $token = auth::attempt($validate->validated())) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
        } catch (ValidationException $e) {
                return $e;
        }

        return response()->json([
                'status' => 'success',
                'message' => 'Successfully',
                'data' => [
                    'token' => [
                        'access_token' => $token,
                        'token_type' => 'bearer',
                        'expires_in' => auth::factory()->getTTL() * 60
                    ],
                ]
            ], 200);
    }
}
