<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeatureValueDescription extends Model
{
    public function product_features_value(){
        return $this->guessBelongsToManyRelation();
    }

}
