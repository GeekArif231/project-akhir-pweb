<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Riwayat;

class RiwayatSeeder extends Seeder
{
    public function run()
    {
        Riwayat::create([
            'penyewaan_id' => 1,
            'total_harga_sewa' => 1500000.00
        ]);

    }
}

