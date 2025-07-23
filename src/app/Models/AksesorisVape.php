<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AksesorisVape extends Model
{
    protected $table = 'aksesoris_vapes';

    protected $fillable = ['nama', 'jenis', 'harga', 'stok', 'deskripsi'];
}

