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

Route::get('/', 'frontend\frontcontroller@index')->name('index');
Route::get('/login','frontend\frontcontroller@login')->name('login');
Route::post('/signup','frontend\frontcontroller@signup')->name('signup');
Route::post('/signin','frontend\frontcontroller@sign_in')->name('sign.in');
Route::get('/logout','frontend\frontcontroller@logout')->name('logout');
Route::get('/show-books/{id}','frontend\frontcontroller@show_books')->name('front.show.books');
Route::get('/single-book/{id}','frontend\frontcontroller@single_books')->name('single.book');
Route::post('/select-category','frontend\frontcontroller@select_category')->name('select.category');
Route::post('/search-books','frontend\frontcontroller@search_books')->name('search.books');
Route::get('/download-book/{id}','frontend\frontcontroller@getDownload')->name('download.book')->middleware('prevent');
Route::get('/read-book/{id}','frontend\frontcontroller@read_book')->name('read.book')->middleware('prevent');
Route::get('/contact','frontend\frontcontroller@contact')->name('contact');
Route::post('send-contact','frontend\frontcontroller@send_contact')->name('send.contact');
Route::post('/send-forgetpass','frontend\frontcontroller@send_forgetpass')->name('send.forgetpass');
Route::get('/change-pass/{id}','frontend\frontcontroller@change_pass')->name('change.pass')->middleware('changeprevent');
Route::post('/save-pass/{id}','frontend\frontcontroller@save_pass')->name('save.pass')->middleware('changeprevent');;


