<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeatureValue extends Model
{
    public function product_feature(){
        return $this->belongsTo(ProductFeature::class);
    }
    public function product_feature_value_descriptions(){
        return $this->hasMany(ProductFeatureValueDescription::class);
    }
}

