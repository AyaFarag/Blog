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

Route::get('/', function () {
    return view('welcome');
});

// admin cpanel in cpanel view
Route::get('cpanel', function () {
    return view('cpanel');
});

// Site Routes

//Route::get('home', function() {
  //  return view('home'); 
//});

Route::resource('home','homeController');

Route::get('category','homeController@create');

Route::resource('arts', 'articlesController');
Route::resource('authers', 'userController');
Route::resource('categories', 'categoriesController');
Route::resource('tags', 'tagsController');

// add new article
Route::resource('add','articlesController');

// add new category
Route::resource('addcategory','categoriesController');
// article page 
Route::any('articlepage','articlesController@create');


