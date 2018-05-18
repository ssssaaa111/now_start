<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'publisher_id', 'id');
    }

    public function publish(Appointment $appointment)
    {
        return $this->appointments()->save($appointment);
    }
}
