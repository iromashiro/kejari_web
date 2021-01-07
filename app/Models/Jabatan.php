<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_jabatan'];

    public function pegawai()
    {
        return $this->hasMany('App\Models\Pegawai', 'id_jabatan');
    }
}
