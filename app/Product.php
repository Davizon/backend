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
    public function product_features(){
        return $this->hasMany(ProductFeature::class)->with(ProductFeatureValue::class);
    }
    public function vendor_products(){
        return $this->hasMany(VendorProduct::class);
    }

}
