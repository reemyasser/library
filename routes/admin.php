<?php

use Illuminate\Support\Facades\Route;
define('PAGINATE',4); /*constant */

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/

Route::group(['prefix' => 'admin', 'namespace' =>'Admin'], function () {


//================================Begin Categories Routes =============================

Route::get('/create-category','AdminController@create_category')->name('create.category');
Route::post('/store-category','AdminController@save_category')->name('store.category');
Route::get('/delete-category/{id}','AdminController@delete_category')->name('delete.category');
Route::get('/show-books/{id}','AdminController@show_cat_books')->name('show.books');
Route::get('/edit-category/{id}','AdminController@edit_category')->name('update.category');
Route::post('/update-category/{id}','AdminController@update_category')->name('edit.category');





});




Route::group(['prefix'=>'admin', 'namespace' => 'BackEnd'],function(){
    Route::get('/','AdminController@login')->name('admin.login');
    Route::get('/dashboard','AdminController@dashboard')->name('admin.dashboard');
    
    //------------------Begin Book Routes----------------------------------------------------
    Route::get('/create-books', 'BookController@create_books')->name('create.book');
    Route::post('/store-books', 'BookController@store_books')->name('store.book');
    Route::get('/show-books', 'BookController@show_books')->name('show.book');
    Route::get('/delete-book/{id}', 'BookController@delete_book')->name('delete.book');
    Route::get('/edit-book/{id}', 'BookController@edit_book')->name('edit.book');
    Route::post('/change-book/{id}', 'BookController@change_book')->name('change.book');
    Route::get('/read-book/{id}', 'BookController@read_book')->name('readbook');
    Route::post('/search-book', 'BookController@search_book')->name('search.book');
    Route::get('/book-details/{id}', 'BookController@book_details')->name('details.book');
    
    
    //----------------End Book Routes-------------------------------------------------------------
});