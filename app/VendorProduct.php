<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorProduct extends Model
{
    public function vendors(){
        return $this->belongsTo(Vendor::class);
    }
}
