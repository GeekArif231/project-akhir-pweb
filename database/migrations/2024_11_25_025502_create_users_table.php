<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nomor_telepon');
            $table->unsignedBigInteger('alamat_id');
            // $table->string('role')->default('customer');
            $table->timestamps();

            $table->foreign('alamat_id')->references('id')->on('alamat');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
