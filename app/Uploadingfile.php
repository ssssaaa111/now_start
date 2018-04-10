<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadingfile extends Model
{
    protected $fillable = [
        'post_id', 'user_id', 'url', 'filename',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
