<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabupatenTable extends Migration
{
    public function up()
    {
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kabupaten');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kabupaten');
    }
};