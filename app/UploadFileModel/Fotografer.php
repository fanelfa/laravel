<?php

namespace App\UploadFileModel;

use Illuminate\Database\Eloquent\Model;
use App\UploadFileModel\Gambar;

class Fotografer extends Model
{
    public $incrementing = false;
    protected $table = 'fotografer';
    protected $fillable = [
        'id', 'nama', 'lahir', 'alamat',
    ];

    public function gambar(){
        return $this->hasMany(Gambar::class);
    }

}
