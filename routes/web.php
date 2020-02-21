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



Route::get('accueil', function(){
    return view('accueil');
});
Route::get('service', function(){
    return view('service');
});
Route::get('contact', function(){
    return view('contact');
});

Route::get('Cvs','Cvcontroller@index');
Route::get('Cvs/create','CvController@create');
Route::post('store','Cvcontroller@store');
Route::get('Cvs/{id}/Edit','Cvcontroller@edit');
Route::put('Cvs/{id}','Cvcontroller@update');
Route::delete('Cvs/{id}','Cvcontroller@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
