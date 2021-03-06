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
    return view('upload');
});

use Illuminate\Http\Request;

Route::post('process', function (Request $request) {
    $path = $request->file('photo')->store('photos');

    dd($path);
});

Route::post('/upload', 'UploadFile\\FileController@upload')->name('upload');

Route::get('/download', 'UploadFile\\FileController@download')->name('download');

Route::resource('/fotografer', 'FotograferController');
