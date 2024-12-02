<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaanTable extends Migration
{
    public function up()
    {
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('jadwal_sewa_id');
            $table->text('detail_acara');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->boolean('confirmed_status')->default(false);
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('jadwal_sewa_id')->references('id')->on('jadwal_sewa');
        });
    }

    public function down()
    {
        Schema::dropIfExists('penyewaan');
    }
};
