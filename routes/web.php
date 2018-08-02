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



Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => [ 'jwtAuth', 'isAdmin']], function () {
   
});


Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => [ 'Authjwt']], function () {
   
    Route::get('getalluser', 'UserController@getusers');
    Route::get('testdelete', 'UserController@delete');
    
    Route::get('testdata', 'UserController@testdata');
    
});

