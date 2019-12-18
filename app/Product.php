<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{

    public function features_value(){

       return $this->belongsToMany(ProductFeatureValue::class,'product_features')->distinct()->with(['product_feature_value_description' => function ($query){
           $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
           $id = str_replace("http://127.0.0.1:8000/api/products/", "",$actual_link) ;
           $query->where('product_id', $id);
       }]);

    }

}
