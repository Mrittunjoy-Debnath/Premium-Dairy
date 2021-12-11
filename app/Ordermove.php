<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordermove extends Model
{
    protected $fillable = [
        'product_name', 'product_price', 'quantity','name','phone','address','total_bill','total_qty'
    ];
}
