<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeatureValue extends Model
{
        public function product_feature_value_description(){
        $id = $_GET;
        return $this->belongsToMany(ProductFeatureValueDescription::class,'product_features');

    }
}

