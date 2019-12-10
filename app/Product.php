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
    public function options(){
        return $this->hasMany(Option::class);
    }
    public function features(){
        return $this->hasMany(Feature::class);
    }
    public function vendor_products(){
        return $this->hasMany(VendorProduct::class);
    }
}
