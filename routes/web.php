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
    Route::get('/admin/products/restore/{category}', 'AdminProductsController@productRestore')->name('admin.productrestore');
    Route::resource('/admin/categories', 'AdminCategoriesController');
    Route::resource('/admin/media', 'AdminMediasController');
    Route::resource('/admin/comments', 'PostCommentController');
    Route::resource('/admin/roles', 'AdminRolesController');
    Route::get('/admin/roles/restore/{role}', 'AdminRolesController@roleRestore')->name('admin.rolerestore');
    Route::resource('/admin/orders', 'AdminOrdersController');
    Route::resource('/admin/products', 'AdminProductsController');
    Route::resource('/admin/schooltypes', 'AdminSchoolTypesController');
    Route::resource('/admin/contact', 'AdminContactsController');
});

//front_end
Route::get('shop', 'MenuController@shop')->name('shop');
Route::get('product/{id}', 'MenuController@product')->name('product');
Route::get('contact', 'MenuController@contact')->name('contact');
Route::get('checkout', 'CheckoutController@index')->name('checkout');
Route::get('cart', 'MenuController@cart')->name('cart');

