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

Auth::routes();
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::resource('ads', 'AdsController');
});
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function(){
    return view('cv');
});
Route::post('/content','ContentController@create')->name('content');

Route::get('/composer',function (){
    system('composer dump-autoload');
    return 'done';
});
