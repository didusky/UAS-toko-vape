<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreVape extends Model
{
    protected $table = 'store_vapes';

    protected $fillable = ['nama_toko', 'lokasi'];
}
