<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Liquid;

class LiquidSeeder extends Seeder
{
    public function run(): void
    {
        Liquid::create([
            'nama' => 'Creamy Mango',
            'rasa' => 'Mangga Susu',
            'harga' => 100000,
            'stok' => 25,
            'deskripsi' => 'Liquid creamy dengan rasa mangga manis.'
        ]);
    }
}

