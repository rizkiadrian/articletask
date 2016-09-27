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

Route::get('/tes', function () {
    return view('content.articlebox');
});
Route::resource('users', 'User\UserController');
Route::resource('login', 'Login\LoginController');
Route::resource('loginforgot', 'Login\ForgotLogincontroller');

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

Route::get('articles/create',[
    'as' => 'article.create',
    'uses' => 'Article\ArticleController@create',
    'middleware' => 'Checklogin'
]);

Route::get('articles',[
    'as' => 'article.index',
    'uses' => 'Article\ArticleController@index',
    ]);

Route::post('email',[
    'as' => 'email.sendemail',
    'uses' => 'Email\ConfirmUserController@store'  
]);

Route::post('articles/create/store',[
    'as' => 'article.store',
    'uses' => 'Article\ArticleController@store'  
]);

Route::delete('admin/deleteuser/{id}',[
    'as' => 'userlist.destroy',
    'uses' => 'Admin\UserlistController@destroy',
    'middleware' => 'CheckAdmin'
]);



Route::get('articles/show/{id}/export',[
    'as' => 'article.export',
    'uses' => 'Article\ArticleController@export'
    
]);

Route::get('articles/show/{id}',[
    'as' => 'article.show',
    'uses' => 'Article\ArticleController@show'
    
]);


Route::post('articles/show/{id}/comment',[
    'as' => 'comment.store',
    'uses' => 'Comment\CommentController@store',
   
    
]);

Route::delete('articles/comdel/{id}',[
    'as' => 'comment.destroy',
    'uses' => 'Comment\CommentController@destroy'
    
]);






Route::delete('articles/delete/{id}',[
    'as' => 'article.destroy',
    'uses' => 'Article\ArticleController@destroy',
    'middleware' => 'CheckAdmin'
]);

Route::patch('articles/update/{id}',[
    'as' => 'article.update',
    'uses' => 'Article\ArticleController@update',
    'middleware' => 'CheckAdmin'
]);

Route::get('articles/edit/{id}',[
    'as' => 'article.edit',
    'uses' => 'Article\ArticleController@edit',
    'middleware' => 'CheckAdmin'
]);


