<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('content.index');
});

Route::get('/register', function () {
    return view('content.register');
});
Route::get('/forgotp', function () {
    return view('content.forgotpass');
});
Route::get('/articles', function () {
    return view('content.articlebox');
});
Route::get('/tes', function () {
    return view('content.articlebox');
});
Route::resource('users', 'User\UserController');
Route::resource('login', 'Login\LoginController');
Route::get('logout', 'Login\LoginCOntroller@logout');
Route::get('admin', [
    'uses' => 'Admin\UserController@index',
    'middleware' => 'CheckAdmin'
]);
Route::get('admin/userlist',[
    'as' => 'userlist.index',
    'uses' => 'Admin\UserlistController@index',
    'middleware' => 'CheckAdmin'
]);

Route::get('article/create',[
    'as' => 'article.create',
    'uses' => 'Article\ArticleController@create',
    'middleware' => 'Checklogin'
]);

Route::post('email',[
    'as' => 'email.sendemail',
    'uses' => 'Email\ConfirmUserController@store'  
]);

Route::post('article/create/store',[
    'as' => 'article.store',
    'uses' => 'Article\ArticleController@store'  
]);

Route::delete('admin/deleteuser/{id}',[
    'as' => 'userlist.destroy',
    'uses' => 'Admin\UserlistController@destroy',
    'middleware' => 'CheckAdmin'
]);


