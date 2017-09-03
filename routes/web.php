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

Route::get('/','FileCtrl@index');
Route::post('Upload','FileCtrl@upload');
Route::get('images','FileCtrl@images');
Route::get('download/storage/uploads/{id}','FileCtrl@download');
