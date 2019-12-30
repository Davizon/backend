<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCategoryValueController extends Controller
{
    public function store(Request $request){
        $category = new ProductCategoryValue();
        $category->label = $request->label;
        $category->parent_id = $request->parent_id;
        $category->value = $category->id;
        $category->save();
    }
}
