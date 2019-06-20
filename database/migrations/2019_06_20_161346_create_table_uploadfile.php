<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUploadfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('fotografer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->date('lahir');
            $table->string('alamat');
            $table->timestamps();
        });

        Schema::create('tabel_gambar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_file');
            $table->integer('id_fotografer')->unsigned();
            $table->timestamps();

            $table->foreign('id_fotografer')->references('id')->on('fotografer')->onUpdate('cascade')->onDelete('cascade'); 
                                    
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotografer');
        Schema::dropIfExists( 'tabel_gambar');
    }
}
