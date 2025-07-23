<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AksesorisVape;

class AksesorisVapeSeeder extends Seeder
{
    public function run(): void
    {
        AksesorisVape::create([
            'nama' => 'Drip Tip Resin',
            'jenis' => 'Drip Tip',
            'harga' => 25000,
            'stok' => 50,
            'deskripsi' => 'Aksesoris drip tip dengan warna custom.',
        ]);
    }
}

