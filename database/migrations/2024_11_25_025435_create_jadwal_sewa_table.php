<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalSewaTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal_sewa', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->boolean('is_available');
            $table->unsignedBigInteger('gedung_id');
            $table->timestamps();

            $table->foreign('gedung_id')->references('id')->on('gedung');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal_sewa');
    }
};

