<?php

//test event
Route::get('/broadcast', function (){
    event(new \App\Events\UserSignedUp("baizunhui"));
});

Route::post('/teacher_registrate', "TeacherController@create");

Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create/{id}', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/{id}', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register_teacher', "TeacherController@index");
Route::get('/', "PostsController@welcome");
Route::get('/search_teacher', "SearchController@index");
Route::post('/search_teacher', "SearchController@store");

Route::get('/release', function () {
    return view('classes.release');
});

Route::get('/image_upload_test', function () {
    return view('test');
});

Route::get('/tests', function () {
    flash('Message 1');
    flash('Message 2')->important();
    flash('Welcome Aboard!')->success();
    flash()->overlay('You are now a Laracasts member!', 'Yay');
    return view('flush_test');
});

Route::get('/zoom', function () {
    $test = new App\ZoomAPI();
    $res = $test->createAUser();
    dd($res);
    return view('test');
});

Route::get('/edit', function () {
    return view('welcome');
});

Route::post('/edit', function (\Illuminate\Http\Request $request) {
    $content = $request['content'];
    $id = auth()->id();
    Cache::forget('teaching_mat'.$id);
    Cache::forever('teaching_mat'.$id, $content);
    return view('teacher.output',compact('content'));
});


Route::get('/return', "PayController@return");
Route::get('/notify', "PayController@notify");




Route::get('/test_pay/{appointment}', "PayController@index");
Route::get('/test_pay_wx', "WeixinPayController@index");
Route::get('/news', "MyController@news");

Route::get('/my', "MyController@index");

//Route::get('/appointments/{id}', "AppointmentController@show");
Route::get('/appointments', "AppointmentController@show");
Route::post('/appointments', "AppointmentController@create");
Route::get('/appointment/{appointment}', "AppointmentController@update");

Route::get('/posts/create', "PostsController@create");
Route::get('/posts', "PostsController@index")->name('home');
Route::get('/posts/{post}', "PostsController@show");
Route::get('/posts/tags/{tag}', "TagsController@index");
Route::post('/posts', "PostsController@store");
Route::post('/posts/upload/{post}', "PostsController@upload");
Route::get('/test', "PostsController@getDownload");
Route::get('/download/{post}', "PostsController@getDownload");
Route::post('/posts/{post}/comments', "CommentsController@store");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('article', 'ArticleController@index')->name('article');
    Route::get('register', 'TeacherController@register');
});

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/weixin', 'Auth\LoginController@oauth');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('login/weixin/callback', 'Auth\LoginController@callback');



