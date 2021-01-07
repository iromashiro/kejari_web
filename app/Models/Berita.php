<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'aktifitas';
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul',
        'isi',
        'tags',
        'slug',
        'jenis_aktifitas'
    ];
}
