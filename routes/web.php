<?php

use Illuminate\Support\Facades\Route;

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

/**
*   ROUTE - ALERT
*/
Route::get('/alert', function(){
    return redirect('home')->with('info', 'Successfully register.');
});



//  Register 
Route::get('/register', 'AuthController@registerGet');
Route::post('/registerPost', 'AuthController@registerPost');


//  Login 
Route::get('login', [ 'as' => 'login', 'uses' => 'AuthController@loginGet']);
Route::post('/loginPost', 'AuthController@loginPost');
Route::get('/logout', 'AuthController@logout');

// Post
Route::get('/post/list', 'PostController@showList');
Route::get('/post/create', 'PostController@createPostGet')->middleware('auth');
Route::post('/post/createPost', 'PostController@createPost');