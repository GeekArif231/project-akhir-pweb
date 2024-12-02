<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kecamatan;

class KecamatanSeeder extends Seeder
{
    public function run()
    {
        Kecamatan::create(['nama_kecamatan' => 'Kecamatan Patrang', 'kabupaten_id' => 1]);
        // Tambahkan data kecamatan lainnya
    }
}

