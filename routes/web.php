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
Route::post('/import', 'ProductController@import')->name('import');
Route::post('/form_import', 'ProductController@formImport')->name('form_import');
Route::get('/form_view', 'ProductController@formView');
Route::get('/importView', 'ProductController@importView');
