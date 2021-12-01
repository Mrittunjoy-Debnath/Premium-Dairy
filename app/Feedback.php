<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'customer_name', 'customer_email', 'customer_subject','customer_feedback',
    ];
}
