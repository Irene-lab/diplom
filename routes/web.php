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

Route::get('/', 'Frontend\MainController@indexAction')->name('frontend-main');


Auth::routes();




Route::get('/admin', 'Backend\MainController@indexAction') -> middleware(['admin']) -> name('backend-main');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout', 'YourController@logout');