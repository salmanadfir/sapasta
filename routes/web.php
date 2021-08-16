<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/create', 'HomeController@formCreate');
Route::post('/home/create', 'HomeController@create');
Route::get('/home/detail/{makanan}', 'HomeController@show');
Route::get('/home/all', 'HomeController@all');
Route::get('/resep', function () {
    return view('resep');
});
Route::get('/video', function () {
    return view('video');
});
// Route::get('/home/edit/{makanan}', 'HomeController@formEdit')->name('category-update');
// Route::patch('/home/edit/{makanan}', 'HomeController@edit')->name('category-update');
Route::delete('/home/delete/{makanan}', 'HomeController@destroy')->name('home');
