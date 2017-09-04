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

    return view('pages.home');
});

Route::get('/item', function () {
    return view('pages.productview');
});

Route::get('/category', function () {
    return view('pages.categorylist');
});

Route::get('/paralax', function () {
    return view('pages.paralex');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('home','HomeController@index');

Route::get('subproduct/{id}',['as'=>'subproduct.show', 'uses'=>'SubproductController@show']);
