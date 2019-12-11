<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    public function product_feature_values(){
        return $this->hasMany(ProductFeatureValue::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
