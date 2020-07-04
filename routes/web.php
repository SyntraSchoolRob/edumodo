<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index'); })->name('index');

Auth::routes();
Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin', function(){
        return view('admin.index');
    });
    Route::resource('admin/users', 'AdminUsersController');
    Route::get('/admin/users/restore/{role}', 'AdminUsersController@userRestore')->name('admin.userrestore');
    Route::resource('/admin/posts', 'AdminPostsController');
    Route::resource('/admin/products', 'AdminProductsController');
    Route::get('admin/products/category/{id}','AdminProductsController@productsPerCategory')->name('admin.productsPerCategory');
    Route::get('/admin/products/restore/{product}', 'AdminProductsController@productRestore')->name('admin.productrestore');
    Route::resource('/admin/categories', 'AdminCategoriesController');
    Route::get('/admin/categories/restore/{category}', 'AdminCategoriesController@categoryRestore')->name('admin.categoryrestore');
    Route::resource('/admin/media', 'AdminMediasController');
    Route::get('/admin/media/restore/{media}', 'AdminMediasController@mediaRestore')->name('admin.mediarestore');
    Route::resource('/admin/comments', 'PostCommentController');
    Route::resource('/admin/roles', 'AdminRolesController');
    Route::get('/admin/roles/restore/{role}', 'AdminRolesController@roleRestore')->name('admin.rolerestore');
    Route::resource('/admin/orders', 'AdminOrdersController');
    Route::get('/admin/orders/restore/{order}', 'AdminOrdersController@orderRestore')->name('admin.orderrestore');
    Route::resource('/admin/schooltypes', 'AdminSchoolTypesController');
    Route::get('/admin/schooltypes/restore/{schooltype}', 'AdminSchoolTypesController@schooltypeRestore')->name('admin.schooltyperestore');
    Route::resource('/admin/contact', 'AdminContactsController');
    Route::resource('/admin/addresses', 'AdminAddressesController');
    Route::get('/admin/addresses/restore/{address}', 'AdminAdressesController@addressRestore')->name('admin.addressrestore');
});

//front_end
Route::get('shop', 'MenuController@shop')->name('shop');
Route::get('/products/category/{id}', 'MenuController@productsPerCategory')->name('productsPerCategory');
Route::get('/products/schooltype/{id}', 'MenuController@productsPerSchoolType')->name('productsPerSchoolType');
Route::get('product/{id}', 'MenuController@product')->name('product');
Route::get('contact', 'MenuController@contact')->name('contact');
Route::post('contactform', 'MenuController@contactform')->name('contactform');
Route::get('checkout', 'CheckoutController@index')->name('checkout');
Route::get('cart', 'MenuController@cart')->name('cart');
Route::get('/products/addToCart/{id}', 'MenuController@addToCart')->name('addToCart');
Route::post('cart', 'MenuController@updateQuantity')->name('quantity');
Route::get('/removeItem/{id}', 'MenuController@removeItem')->name('removeItem');
//Route::get('/removeAll}', 'MenuController@removeAll')->name('removeAll');

//routes stripe payment
Route::get('pay', 'StripePaymentController@pay')->name('pay');
Route::post('stripe', 'StripePaymentController@orderStripePost')->name('order.post');


