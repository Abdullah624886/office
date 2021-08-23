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
    return view('welcome');
});

// Route::get('/category', 'CategoryController@create');
// Route::post('store/category', 'CategoryController@store')->name('store.category');
// Route::get('all/category', 'CategoryController@index')->name('all.category');
// Route::get('delete/category/{id}', 'CategoryController@destroy');
// Route::get('edit/category/{id}', 'CategoryController@edit');
// Route::post('updat/category/{id}', 'CategoryController@Update');
// Route::get('view/category/{id}', 'CategoryController@show');

Route::resource('category', 'CategoryController');

// student 
Route::get('/student', 'StudentController@student');
Route::Post('store/student', 'StudentController@store')->name('store.data');
