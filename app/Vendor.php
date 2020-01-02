<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function vendor_products(){
        return $this->belongsToMany(Product::class,'vendor_products');
    }
}
