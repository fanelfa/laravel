<?php

namespace App\Http\Controllers\UploadFile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UploadFileModel\Gambar;

class FileController extends Controller
{
    public function upload(Request $request){
        $tambahGambar = new Gambar();

        // cache the file
        $file = $request->file('photo');

        // generate a new filename. getClientOriginalExtension() for the file extension
        $filename = 'FILE-' . time() . '.' . $file->getClientOriginalExtension();

        // save to storage/app/public as the new $filename
        $file->storeAs('public', $filename);
        // dd($filename);
        $tambahGambar->nama_file = (string)$filename;

        $tambahGambar->id_fotografer = 1;

        $tambahGambar->save();
    
        // dd($path);
        return redirect()->route('download');
    }
    
    public function download()
    {
        $gambar = Gambar::all();

        $data = [
            'gambar' => $gambar
        ];

        return view('download', $data);
    }
}
