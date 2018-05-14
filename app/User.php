<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'github_id', 'avatar', 'weixin_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);

    }

    public function teachers()
    {
        return $this->hasOne(Teacher::class);
    }

    public function teacher_register(Teacher $teacher)
    {

        $this->teachers()->save($teacher);
    }

    public function publish(Post $post)
    {
        $this->posts()->save($post);
    }

    public function files()
    {
        return $this->hasMany(Uploadingfile::class);
    }

    public function uploading(Uploadingfile $uploadingfile)
    {
        $this->files()->save($uploadingfile);
    }

    public function owns($relation)
    {
        return $this->id == $relation->user_id;
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function can_comment($post)
    {
        try{

                $res=  $this->appointments()->where(['publisher_id' => $post->id])->get()->toArray();
                return empty($res)?false:true;
        }
        catch (\Exception $exception){
            return false;
        }
    }

    public function can_reply($post)
    {
        return $this->owns($post) || $this->can_comment($post);
    }



}
