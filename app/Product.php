<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
        return $this->hasMany(Category::class);
    }
    public function states(){
        return $this->hasOne(State::class);
    }
    public function product_options(){
        return $this->hasMany(ProductOption::class);
    }
    public function product_features_value(){
        return $this->belongsToMany(ProductFeatureValue::class,'product_features');
    }
    public function product_features_value_description(){
        return $this->belongsToMany(ProductFeatureValueDescription::class,'product_features');
    }
    public function vendor_products(){
        return $this->hasMany(VendorProduct::class);
    }

}
