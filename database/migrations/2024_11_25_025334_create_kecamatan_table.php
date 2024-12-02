<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKecamatanTable extends Migration
{
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kecamatan');
            $table->unsignedBigInteger('kabupaten_id');
            $table->timestamps();

            $table->foreign('kabupaten_id')->references('id')->on('kabupaten');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kecamatan');
    }
};
