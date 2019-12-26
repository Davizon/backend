<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
     public function id(){
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $id = str_replace("http://127.0.0.1:8000/api/products/", "",$actual_link) ;
        return $id;
    }

    public function features_value(){
       return $this->belongsToMany(ProductFeatureValue::class,'product_features')->distinct()->with(['value_description' => function ($query){
        $id = $this->id();
       $query->where('product_id',$id);
       }]);
    }

    public function options(){
        return $this->belongsToMany(ProductOptionValue::class,'product_options')->distinct()->with(['option_descriptions' => function ($query){
            $id = $this->id();
            $query->where('product_id',$id);
        }]);
    }
    public function categories(){
        return $this->belongsToMany(ProductCategoryValue::class,'product_categories');
    }

}
