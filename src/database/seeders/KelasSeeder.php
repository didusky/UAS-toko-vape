<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        Kelas::create(['nama_kelas' => 'Admin', 'deskripsi' => 'Pengelola sistem']);
        Kelas::create(['nama_kelas' => 'Kasir', 'deskripsi' => 'Melakukan transaksi']);
    }
}
