<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopProduct extends Model
{
    protected $fillable = [
        'product_name',
        'product_price',
        'image',
    ];
}
