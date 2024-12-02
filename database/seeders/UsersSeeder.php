<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nama' => 'John ',
            'email' => 'jhonyge@example.com',
            'password' => bcrypt('password123'),
            'nomor_telepon' => '08123456789',
            'alamat_id' => 1
        ]);

        User::create([
            'nama' => 'deny ',
            'email' => 'deny@example.com',
            'password' => bcrypt('password321'),
            'nomor_telepon' => '08123456789',
            'alamat_id' => 1
        ]);
    }
}

