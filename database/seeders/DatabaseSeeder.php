<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            KabupatenSeeder::class,
            KecamatanSeeder::class,
            AlamatSeeder::class,
            UsersSeeder::class,
            GedungSeeder::class,
            JadwalSewaSeeder::class,
            PenyewaanSeeder::class,
            RiwayatSeeder::class,
        ]);
    }
}

