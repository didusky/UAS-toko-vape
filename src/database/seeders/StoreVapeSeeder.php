<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StoreVape;

class StoreVapeSeeder extends Seeder
{
    public function run(): void
    {
        StoreVape::create(['nama_toko' => 'CloudyVape', 'lokasi' => 'Jakarta']);
        StoreVape::create(['nama_toko' => 'VapeStore88', 'lokasi' => 'Bandung']);
    }
}