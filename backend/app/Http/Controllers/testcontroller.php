<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    function helloworld(){
        return "{message:'hello world'}";
    }
}
