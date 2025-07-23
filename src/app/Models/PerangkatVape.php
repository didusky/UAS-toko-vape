<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerangkatVape extends Model
{
    protected $table = 'perangkat_vapes';

    protected $fillable = ['nama', 'merk', 'harga', 'stok', 'deskripsi'];
}
