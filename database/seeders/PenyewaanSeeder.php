<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penyewaan;

class PenyewaanSeeder extends Seeder
{
    public function run()
    {
        Penyewaan::create([
            'id_user' => 1,
            'jadwal_sewa_id' => 1,
            'detail_acara' => 'Seminar Teknologi Informasi',
            'jam_mulai' => '09:00',
            'jam_selesai' => '17:00',
            'confirmed_status' => true
        ]);
        // Tambahkan data penyewaan lainnya sesuai kebutuhan
    }
}

