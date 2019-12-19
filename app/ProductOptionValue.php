<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOptionValue extends Model
{
    public function option_descriptions(){
        return $this->belongsToMany(ProductOptionValueDescription::class, 'product_options');
    }
}
