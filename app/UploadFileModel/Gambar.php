<?php

namespace App\UploadFileModel;

use Illuminate\Database\Eloquent\Model;
use App\UploadFileModel\Fotografer;

class Gambar extends Model
{
    protected $table = 'tabel_gambar';
    protected $fillable = ['id', 'nama_file'];

    protected $hidden = [
        'id_fotografer'
    ];


    public function fotografer()
    {
        return $this->belongsTo(Fotografer::class, 'id_fotografer');
    }
}
