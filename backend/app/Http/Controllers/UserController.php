<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function GetUser(){

        $usr = auth::user();

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully',
            'data' => $usr
        ], 200);
    }

}
