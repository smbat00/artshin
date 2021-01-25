<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'SiteController@index')->name('index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
Route::get('/cpanel', 'AdminController@index')->name('admin');
Route::get('/cpanel/category', 'AdminController@category')->name('acategory');
Route::get('/cpanel/category/addcategory', 'AdminController@addcategory')->name('addcategory');
Route::get('/cpanel/items', 'AdminController@items')->name('items');
Route::post('/cpanel/items/additems', 'AdminController@additems')->name('additems');

    });




Route::get('/items/{id}', 'SiteController@singleitems')->name('singleitems');
Route::get('/category/{id}', 'SiteController@singlecategory')->name('singlecategory');

//Route::get('/cpanel', function () {
//    return view('admin/index');
//});
