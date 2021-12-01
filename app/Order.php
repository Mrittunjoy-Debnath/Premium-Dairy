<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_name', 'product_price', 'quantity','name','phone','address',
    ];
}
