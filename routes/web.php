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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/register', 'RegisterController@register')->name('register');
Route::post('/createUser','RegisterController@createUser')->name('createUser');
Route::get('/demoView', function(){
    return view('demo.about');
});
