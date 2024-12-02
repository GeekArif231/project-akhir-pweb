<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kabupaten;

class KabupatenSeeder extends Seeder
{
    public function run()
    {
        Kabupaten::create(['nama_kabupaten' => 'Kabupaten Jember']);
        Kabupaten::create(['nama_kabupaten' => 'Kabupaten Banyuwangi']);
    }
}


