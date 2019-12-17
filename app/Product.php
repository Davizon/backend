<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public function features(){
        return $this->belongsToMany(ProductFeatureValueDescription::class,'product_features');

    }
    public function features_value(){

       return $this->belongsToMany(ProductFeatureValue::class,'product_features')->distinct()->with(['product_feature_value_description' => function ($query){
           $query->where('product_id','=','1');
       }]);

    }

}
