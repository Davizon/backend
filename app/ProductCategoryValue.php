<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryValue extends Model
{
    public function subcategory(){
        return $this->belongsToMany(ProductCategoryValueDescription::class, 'product_categories');
    }
}
