<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class, 'publisher_id', "id");
    }
}
