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

use Illuminate\Http\Request;
use App\Gambar;

Route::post('process', function (Request $request) {
    $path = $request->file('photo')->store('photos');

    dd($path);
});

Route::post('processEditName', function (Request $request) {
    $tambahGambar = new Gambar();
    
    // cache the file
    $file = $request->file('photo');

    // generate a new filename. getClientOriginalExtension() for the file extension
    $filename = 'profile-photo-' . time() . '.' . $file->getClientOriginalExtension();

    // save to storage/app/photos as the new $filename
    $file->storeAs('photos', $filename);
    // dd($filename);
    $tambahGambar->nama_file = (string)$filename;
    
    $tambahGambar->save();
    dd($tambahGambar);
    
    // dd($path);

});
