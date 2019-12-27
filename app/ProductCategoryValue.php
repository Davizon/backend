<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryValue extends Model
{
    public function template_feature(){
        return $this->belongsToMany(ProductFeatureValue::class,'category_features');

    }
}
