<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatTable extends Migration
{
    public function up()
    {
        Schema::create('alamat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jalan');
            $table->unsignedBigInteger('kecamatan_id');
            $table->timestamps();

            $table->foreign('kecamatan_id')->references('id')->on('kecamatan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alamat');
    }
};
