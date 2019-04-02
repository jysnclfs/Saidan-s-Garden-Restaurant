<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/categories', 'Admin\CategoryController@index');
Route::post('/category', 'Admin\CategoryController@store');

// Todo: Add to controler
Route::post('/add-image', function (Request $request) {
    $file = $request->file('file');
    $dir = 'public/images';
    $path = $file->store($dir);
    return str_replace("$dir/", '', $path);
});