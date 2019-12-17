<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeatureValueDescription extends Model
{
     public function product_feature_value_descriptions(){
        return $this->belongsToMany(ProductFeatureValue::class, 'product_features')->distinct();
    }

}
