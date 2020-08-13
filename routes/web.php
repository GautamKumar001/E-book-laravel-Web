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

Route::view('/welcome','welcome');
Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::view('/about','library.about');

Route::get('/διαχειριστής','LibraryController@admin');
Route::get('/contact','ContactFormController@create')->middleware('auth');
Route::post('/contact','ContactFormController@store');
Route::get('/invoice','PdfController@pdf');
Route::get('/main','LibraryController@home')->middleware('auth');
Route::get('/mainfo/{lang}','LibraryController@main');
Route::get('/create','LibraryController@create');
Route::post('/store','LibraryController@store');
Route::get('/create2','LibraryController@create2');
Route::post('/storeinf','LibraryController@storeinfo');
Route::get('/show','LibraryController@show');
Route::get('/user','LibraryController@user');
Route::get('/showinf','LibraryController@showinfo');
Route::get('/book','LibraryController@book')->middleware('auth');
Route::get('/insert','LibraryController@insert');
Route::get('/update/uploads/{image}','LibraryController@update');
Route::get('/index/{lang}','LibraryController@index');
Route::get('/down','LibraryController@downbk');
Route::delete('/delete/{id}','LibraryController@destroy');
Route::delete('/deleteinfo/{id}','LibraryController@destroyinfo');
Route::delete('/deluser/{id}','LibraryController@deluser');
