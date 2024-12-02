<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatTable extends Migration
{
    public function up()
    {
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penyewaan_id');
            $table->decimal('total_harga_sewa', 10, 2);
            $table->timestamps();

            $table->foreign('penyewaan_id')->references('id')->on('penyewaan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayat');
    }
};
