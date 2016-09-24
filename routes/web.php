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
Route::get('/tes', function () {
    return view('content.userindex');
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

Route::delete('admin/deleteuser/{id}',[
    'as' => 'userlist.destroy',
    'uses' => 'Admin\UserlistController@destroy',
    'middleware' => 'CheckAdmin'
]);


