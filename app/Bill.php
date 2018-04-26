<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'order_id', 'user_id', 'publisher_id', 'price', 'appointment_id'
    ];
}
