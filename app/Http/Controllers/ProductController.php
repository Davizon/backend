<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductFeatureValue;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $value = ProductFeatureValue::all();
        return response()->json($products->load('product_features_value'));
    }
}
