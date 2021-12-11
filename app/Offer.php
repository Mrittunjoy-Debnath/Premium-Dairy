<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'product_image', 'product_name', 'product_description','product_price','product_offer_price'
    ];
}
