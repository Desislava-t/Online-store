<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'customer_first_name',
        'customer_email',
        'customer_last_name',
        'customer_shipping_address',
        'customer_country',
        'customer_city',
        'country_code',
        'customer_information',
        'price'
    ];
}
