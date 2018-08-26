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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('farmers',function(){
    return view('pages.addFarmers');
});
Route::post('add','FarmersController@addFarmer');

Route::get('farmer','FarmersController@getFarmer');

Route::get('cow',function(){
    return view('pages.addCow');
});
Route::post('cows','CowsController@addCow');
Route::get('ngombe','CowsController@getCows');
Route::get('details',function(){
    return view('pages.details');
});
Route::post('detail','FarmersController@addDetails');

Route::get('kimani','FarmersController@getDetails');

/*get single record*/
Route::get('farmer/{id}','FarmersController@farmer');

Route::post('updateFarmer','FarmersController@update');


Route::get('cow/{id}','CowsController@cow');

Route::post('cowUpdate','CowsController@updateCow');

Route::get('detail/{id}','FarmersController@updateDetails');

Route::post('updating', 'FarmersController@updateDetail');


