<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeatureValue extends Model
{
        public function value_description(){
        return $this->belongsToMany(ProductFeatureValueDescription::class,'product_features');

    }
}

