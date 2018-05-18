<?php

namespace App\Providers;

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
    }
}
