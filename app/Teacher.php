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
        return $this->hasMany(Appointment::class, 'publisher_id', 'user_id');
    }

    public function posts()
    {
        return $this->hasone(Post::class, 'user_id', 'user_id');
    }

    public function publish(Appointment $appointment)
    {
        return $this->appointments()->save($appointment);
    }

    public static function country()
    {
        return static::select('country')
            ->limit(6)
            ->groupBy('country')
            ->get()
            ->toArray();
    }

    public static function language()
    {
        return static::select('language')
            ->limit(6)
            ->groupBy('language')
            ->get()
            ->toArray();
    }

    public function scopeFilter($teachers, $filter)
    {
        if (isset($filter['country'])) {
            $country = $filter['country'];
            $teachers = $teachers->where('country', $country);
        }
        if (isset($filter['language'])) {
            $language = $filter['language'];
            $teachers = $teachers->where('language', $language);
        }

//        if (isset($filter['language'])) {
//            $language = $filter['language'];
//            $teachers = $teachers->where('language', $language);
//        }

        return $teachers;
    }



}
