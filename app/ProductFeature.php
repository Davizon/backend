<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function product_feature_values(){
        return $this->hasMany(ProductFeatureValue::class)->with('product_feature_value_descriptions');
    }
}
