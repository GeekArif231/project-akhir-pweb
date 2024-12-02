<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alamat;

class AlamatSeeder extends Seeder
{
    public function run()
    {
        Alamat::create(['nama_jalan' => 'Jl. Raya Jember', 'kecamatan_id' => 1]);
        Alamat::create(['nama_jalan' => 'Jl. Raya Jember', 'kecamatan_id' => 1]);
        // Tambahkan data alamat lainnya
    }
}

