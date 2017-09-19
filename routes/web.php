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


Route::get('/item', function () {
    return view('pages.productview');
});

// Route::get('/category', function () {
//     return view('pages.categorylist');
// });

Route::get('/paralax', function () {
    return view('pages.paralex');
});
// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// });


Route::get('home','HomeController@index');

//Route::post('register','ProductController@register');

Route::resource('product','ProductController');


Route::resource('category','ProductbycategoryController');


Route::resource('wishlist','WishlistController');


Route::resource('cart','CartController');


Route::resource('dashboard','DashboardController');

Route::resource('subcategory','ProductbysubcategoryController');


Route::resource('changepwd','ChangepwdController');


Route::resource('profileimg','ProfileimageController');

Route::resource('address','AddressController');

// Route::post('auth/register','Auth\RegisterController@postRegister');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/aboutus', 'StaticpagesController@aboutus')->name('aboutus');

Route::any('/contactus', 'ContactusController@store')->name('contactus');


Route::get('/policy', 'StaticpagesController@policy')->name('policy');

Route::resource('ajaxreq', 'AjaxController');

?>