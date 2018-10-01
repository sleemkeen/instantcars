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



Route::group(['namespace' => 'Front'], function () {
  Route::get('/', 'HomeController@index')->name('index');
  Route::get('/about', 'HomeController@about')->name('about');
  Route::get('/contact', 'HomeController@contact')->name('contact');
  Route::get('/login', 'HomeController@login')->name('login');
  Route::get('/register', 'HomeController@register')->name('register');
  Route::get('/how-it-works', 'HomeController@work')->name('how-it-works');
  Route::get('/faq', 'HomeController@faq')->name('faq');
  Route::get('/privacy-policy', 'HomeController@privacy')->name('privacy');
  Route::get('/login', 'HomeController@login')->name('login');
  Route::get('/register', 'HomeController@register')->name('register');
  Route::get('/deals', 'HomeController@deals')->name('deals');
  Route::get('/submit-a-car', 'HomeController@listacar')->name('listacar');

  Route::get('/car-detail', 'HomeController@detail')->name('detail');
});



Route::group(['namespace' => 'Admin','prefix' => 'admin'], function () {
   Route::get('/home', 'AdminController@home');
   Route::get('/profile', 'AdminController@profile');
});


// Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => [ 'jwtAuth', 'isAdmin']], function () {
   
// });


Route::group([ 'namespace' => 'User'], function () {
   
    Route::get('profile', 'UserController@profile');
    Route::get('changepassword', 'UserController@changepassword');
    Route::get('mycars', 'UserController@mycars');
    
    
});

