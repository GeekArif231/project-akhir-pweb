<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JadwalSewa;

class JadwalSewaSeeder extends Seeder
{
    public function run()
    {
        JadwalSewa::create([
            'tanggal_mulai' => '2024-12-01',
            'tanggal_selesai' => '2024-12-01',
            'is_available' => true,
            'gedung_id' => 1
        ]);
        // Tambahkan jadwal sewa lainnya sesuai kebutuhan
    }
}

