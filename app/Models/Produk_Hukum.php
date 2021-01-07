<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk_Hukum extends Model
{

    protected $table = 'produk_hukums';

    protected $fillable = [
        'nama_produk',
        'path'
    ];
}
