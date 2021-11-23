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

Route::get('/', 'FrontendController@home')->name('homepage');
Route::get('course', 'FrontendController@course')->name('coursePage');
Route::get('account', 'FrontendController@account')->name('accountPage');
Route::get('accountInfo', 'FrontendController@accountInfo')->name('accountInfoPage');
Route::get('course_detail/{id}', 'FrontendController@courseDetail')->name('courseDetailPage');
Route::get('cart', 'FrontendController@cart')->name('cartPage');
Route::get('about', 'FrontendController@about')->name('aboutPage');
Route::get('contact', 'FrontendController@contact')->name('contactPage');
Route::get('book', 'FrontendController@book')->name('bookPage');

// Admin CRUD
Route::middleware('role:admin')->group(function(){
	Route::get('dashboard', 'BackendController@dashboard')->name('dashboardpage');
	Route::resource('categories','CategoryController');
	Route::resource('courses','CoursesController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
