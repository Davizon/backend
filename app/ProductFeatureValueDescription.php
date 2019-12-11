<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeatureValueDescription extends Model
{
    public function product_feature_value(){
        return $this->belongsTo(ProductFeatureValue::class);
    }
}
