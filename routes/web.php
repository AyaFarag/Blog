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

// admin cpanel in house view
Route::get('cpanel', function () {
    return view('cpanel');
});

// Admin Routes
Route::group(['prefix' => 'admin'], function() {

    Route::get('index', function() {
        return view('admin.index'); 
    });

});

