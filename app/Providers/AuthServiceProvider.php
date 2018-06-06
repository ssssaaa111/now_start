<?php

namespace App\Providers;

use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-post', function ($user, $post) {
//            return $user->id == $post->publisher_id;
            return $user->owns($post);
        });

        Gate::define('can-comment', function ($user, $post){
            return $user->can_comment($post);
        } );

        Gate::define('can-reply', function ($user, $post){
            return $user->can_reply($post);
        } );

        Gate::define('is_registed', function ($user){
            try{
                $user->teachers()->firstOrFail();
                return true;
            }
            catch (\Exception $exception){
                return false;
            }

        } );

        Gate::define('is_chatted_before', function ($user, $teacher_id){
            try{
                Thread::between(array($user->id, $teacher_id))->firstOrFail();
                return true;
            }
            catch (ModelNotFoundException $exception){
                return false;
            }

        } );

    }
}
