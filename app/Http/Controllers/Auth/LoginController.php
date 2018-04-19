<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'posts';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = $this->findOrCreateGithubUser(
            Socialite::driver('github')->user()
        );
        auth()->login($user);
        session()->flash("message", 'thanks for sign up');
        return redirect('/posts');
    }

    private function findOrCreateGithubUser($github_user)
    {
        $user = User::firstOrNew(['github_id' =>$github_user->id]);
        if($user->exits) return $user;

        $user->fill([
            'name'=>$github_user->nickname,
            'avatar'=>$github_user->avatar,
            'email'=>$github_user->email,
            'password'=>'123456',
        ])->save();
        return $user;
        
    }

    private function findOrCreateWechatUser($wechat_user)
    {
        $user = User::firstOrNew(['weixin_id' =>$wechat_user->id]);
        if($user->exits) return $user;
        $user->fill([
            'name'=>$wechat_user->nickname,
            'avatar'=>$wechat_user->avatar,
            'email'=>empty($wechat_user->email)?$wechat_user->id.str_random(10) : $wechat_user->email,
            'password'=>'123456',
        ])->save();
        return $user;
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function oauth(Request $request)
    {
        return Socialite::with('weixin')->redirect();
    }

    public function callback(Request $request)
    {
        $user = $this->findOrCreateWechatUser(
            Socialite::with('weixin')->user()
        );
        auth()->login($user);
        session()->flash("message", 'thanks for sign up');
        return redirect('/posts');
    }
}
