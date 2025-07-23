<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PerangkatVape;

class PerangkatVapeSeeder extends Seeder
{
    public function run(): void
    {
        PerangkatVape::create([
            'nama' => 'Voopoo Drag X',
            'merk' => 'Voopoo',
            'harga' => 475000,
            'stok' => 10,
            'deskripsi' => 'Device mod dengan desain premium.',
        ]);
    }
}
