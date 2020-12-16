<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\ShoeSize;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getCustomer(){
        if(auth()->check()){
            $ShoeSizes = ShoeSize::with('Customers')->get();
            if(!$ShoeSizes){
                return response()->json([
                    'status' => 'success',
                    'message' => 'No data found',
                    'data' => $ShoeSizes
                ], 204);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Data found',
                'data' => $ShoeSizes
            ]);
        }

    }
}
