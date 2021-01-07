<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nip',
        'nama',
        'pendidikan_terakhir',
        'golongan_jabatan',
        'path',
        'id_jabatan'
    ];

    public function jabatan()
    {
        return $this->belongsToMany('App\Models\Jabatan', 'pegawais', 'id', 'id_jabatan');
    }
}
