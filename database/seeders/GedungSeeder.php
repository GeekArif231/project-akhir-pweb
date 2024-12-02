<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gedung;

class GedungSeeder extends Seeder
{
    public function run()
    {
        Gedung::create([
            'nama_gedung' => 'Aula Utama',
            'deskripsi' => 'Gedung utama untuk acara besar',
            'kapasitas' => 500,
            'fasilitas' => 'AC, Proyektor, WiFi',
            'harga_internal' => 1500000.00,
            'harga_eksternal' => 3000000.00,
            'is_available' => true,
            'gambar_gedung' => 'aula_utama.jpg',
            'alamat_id' => 1
        ]);

    }
}

