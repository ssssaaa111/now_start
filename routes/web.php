<?php

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

Route::get('/', function () {
    return view('welcome');
});

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
Route::get('logout', 'Auth\LoginController@logout');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');



