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

Route::prefix('foo')->group(function(){ 
    Route::get('/', 'FooController@callAllMethod')->name('coy');
    Route::get('/{m}', 'FooController@callAMethod')->name('cuy');
}); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
