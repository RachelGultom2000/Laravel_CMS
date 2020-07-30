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

Route::get('/', function () {
    return view('users/welcome');
});

Route::get('/admin','AdminController@index');

Route::get('cariproduct','ProductController@search');

Route::resource('/admin/product','ProductController');

Route::resource('/admin/profil','ProfilController');
Auth::routes();

Route::get('/users', 'HomeController@index')->name('home');

Route::get('/', 'PageController@index');
 
Route::get('users/about', 'PageController@about');
 
Route::get('users/contact', 'PageController@contact');
