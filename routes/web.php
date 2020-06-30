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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WebsiteController@welcome')->name('/');

Route::get('/bathroomProducts', 'WebsiteController@bathroomProducts')->name('bathroomProducts');

Route::get('/showBathrooomProductsByType/{type}', 'WebsiteController@bathroomProductsByType')->name('showBathrooomProductsByType');

Route::get('/kitchenProducts', 'WebsiteController@kitchenProducts')->name('kitchenProducts');

Route::get('/showKitchenProductsByType/{type}', 'WebsiteController@kitchenProductsByType')->name('showKitchenProductsByType');

Route::get('/laundryProducts', 'WebsiteController@laundryProducts')->name('laundryProducts');

Route::get('/showLaundryProductsByType/{type}', 'WebsiteController@laundryProductsByType')->name('showLaundryProductsByType');

Route::get('/productDetails/{id}', 'WebsiteController@productDetails')->name('productDetails');

Route::get('/contactUs', 'WebsiteController@contactUs')->name('contactUs');

Route::post('/sendMessage', 'WebsiteController@sendMessage')->name('sendMessage');

Route::get('/gallery', 'WebsiteController@gallery')->name('gallery');

Route::get('/cart', 'WebsiteController@cart')->name('cart');

Route::get('/checkout', 'WebsiteController@checkout')->name('checkout');

Route::get('/addToCart/{id}', 'WebsiteController@addToCart')->name('addToCart');

Route::get('/getReduceByOne/{id}', 'WebsiteController@getReduceByOne')->name('getReduceByOne');

Route::get('/getRemoveItem/{id}', 'WebsiteController@getRemoveItem')->name('getRemoveItem');

Route::post('/checkoutProcessing', 'WebsiteController@checkoutProcessing')->name('checkoutProcessing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userLogout', 'Auth\LoginController@userLogout')->name('userLogout');

//////////////////////////////////////////////////////////////////////////////////////

Route::get('/adminLogin', 'Auth\AdminLoginController@showLoginForm')->name('adminLogin');

Route::post('/adminLoginSubmit', 'Auth\AdminLoginController@login')->name('adminLoginSubmit');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/adminLogout', 'Auth\AdminLoginController@logout')->name('adminLogout');


Route::get('/adminOrders', 'AdminController@orders')->name('adminOrders');


Route::get('/adminProductTypes', 'AdminController@indexProductTypes')->name('adminProductTypes');

Route::post('/adminAddProductType', 'AdminController@addProductType')->name('adminAddProductType');

Route::post('/editProductType', 'AdminController@editProductType')->name('editProductType');

Route::get('/deleteProductType', 'AdminController@deleteProductType')->name('deleteProductType');


Route::get('/adminProducts', 'AdminController@indexProducts')->name('adminProducts');

Route::post('/adminAddProduct', 'AdminController@addProduct')->name('/adminAddProduct');

Route::post('/editProduct', 'AdminController@editProduct')->name('editProduct');

Route::get('/deleteProduct', 'AdminController@deleteProduct')->name('deleteProduct');


Route::get('/adminGallery', 'AdminController@adminGallery')->name('adminGallery');

Route::post('/adminAddGalleryImage', 'AdminController@addGalleryImage')->name('/adminAddGalleryImage');

Route::get('/deleteGalleryImg', 'AdminController@deleteGalleryImg')->name('/deleteGalleryImg');