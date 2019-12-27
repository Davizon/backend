<?php

namespace App\Http\Controllers;

use App\ProductCategorie;
use App\ProductFeatureValue;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $value = ProductFeatureValue::all();
        return response()->json($products);
//       return response()->json($value->load( 'product_feature_value_description'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->short_description = $request->short_description;
        $product->full_description = $request->full_description;
        $product->price = $request->price;
        $product->special_price = $request->price;
        $product->meta_keyword = str_replace(' ', ',', $request->product_name);
        $product->meta_description = str_replace(' ', ',', $request->product_name);
        $product->page_title = $request->product_name;
        $product->main_image = $request->main_image;
        $product->note = $request->note;
        $product->state_id = $request->state_id;
        $product->save();

        $category = new ProductCategorie();
        $category->product_id = $product->id;
        $category->product_category_value_id = $request->category;
        $category->save();
        $category = new ProductCategorie();
        $category->product_id = $product->id;
        $category->product_category_value_id = $request->sub_category;
        $category->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product->load('features_value', 'options','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product->load('categories','vendor_products','states','product_features'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->short_description = $request->short_description;
        $product->full_description = $request->full_description;
        $product->price = $request->price;
        $product->special_price = $request->price;
        $product->meta_keyword = str_replace(' ', ',', $request->product_name);
        $product->meta_description = str_replace(' ', ',', $request->product_name);
        $product->page_title = $request->product_name;
        $product->main_image = $request->main_image;
        $product->note = $request->note;
        $product->state_id = $request->state_id;
        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
