<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
   public function helloworld(){
        return "{message:'hello world'}";
    }
}
