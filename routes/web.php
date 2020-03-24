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

Route::get('/user/reg','Api\UserController@reg');
Route::get('/user/login','Api\UserController@login');
Route::get('/user/token','Api\UserController@getData');

Route::prefix('/api')->middleware('Token')->group(function () {
    Route::get('/user/a','Api\UserController@a');
});
Route::get('/user/image','TestController@images');
Route::get('/user/navigation','TestController@navigation');
Route::get('/user/cate','TestController@cate');
Route::get('/user/search','TestController@search');


Route::get('/user/hotel_image','TestController@hotel_image');
Route::get('/user/hotel_title','TestController@hotel_title');
Route::get('/user/hotel_cate','TestController@hotel_cate');
