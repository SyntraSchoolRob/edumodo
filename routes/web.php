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
    Route::resource('/admin/categories', 'AdminCategoriesController');
    Route::resource('/admin/media', 'AdminMediasController');
    Route::resource('/admin/comments', 'PostCommentController');
    Route::resource('/admin/roles', 'AdminRolesController');
    Route::get('/admin/roles/restore/{role}', 'AdminRolesController@roleRestore')->name('admin.rolerestore');
    Route::resource('/admin/orders', 'AdminOrdersController');
    Route::resource('/admin/products', 'AdminProductsController');
    Route::resource('/admin/schooltypes', 'AdminSchoolTypesController');
});

//front_end
Route::get('/post/{slug}', 'AdminPostsController@post')->name('home.post');
