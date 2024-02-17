<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //index product api
    public function index(){
        // $products = Product::paginate(10);
        $products = Product::all();
        return response()->json([
            'status'    => 'Success',
            'data'      => $products
        ], 200);
    }
}
