<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\ShoeSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class CustomerController extends Controller
{
    public function getCustomer(){
            $ShoeSizes = DB::table('ShoeSizes')->select(  'id', 'name', 'email', 'age', 'gender', 'size', 'customers.updated_at')->join('customers','customers.idshoesizes','=', 'shoesizes.idshoesizes')->get();
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
    public function getCustomerSizesForChart(){
        $ShoeSizes = DB::table('ShoeSizes')->select(array("size",DB::raw('COUNT(*) as freq')))->groupBy('size')->get();
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
