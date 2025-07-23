<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Liquid extends Model
{
    protected $table = 'liquids';

    protected $fillable = ['nama', 'rasa', 'harga', 'stok', 'deskripsi'];
}

