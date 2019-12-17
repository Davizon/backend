<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeatureValue extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class,'product_features');

    }
       public function product_feature_value_description(){
        return $this->belongsToMany(ProductFeatureValueDescription::class,'product_features');

    }
}

