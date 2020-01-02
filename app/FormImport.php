<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormImport extends Model
{
    protected $casts = [
        'head_excel' => 'json',
    ];
}
