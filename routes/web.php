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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',"App\Http\Controllers\postController@home" );

Route::get('/createpost',"App\Http\Controllers\postController@createpost");
Route::post('/submitpost',"App\Http\Controllers\postController@submitpost");
Route::get('/contactus',"App\Http\Controllers\postController@contactus");



Route::get('/posts',"App\Http\Controllers\postController@allposts");
Route::get('/post/{post_id}/show',"App\Http\Controllers\postController@show");
Route::get('/post/{post_id}/edit',"App\Http\Controllers\postController@edit");
Route::post('/post/{post_id}/update',"App\Http\Controllers\postController@update");
Route::get('/post/{post_id}/delete',"App\Http\Controllers\postController@delete");
