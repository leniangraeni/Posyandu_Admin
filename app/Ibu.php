<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    protected $fillable = ['name', 'email', 'password', 'no_kk', 'nik',
                            'alamat', 'no_telp', 'nama_suami', 'tanggal_lahir',
                            'tempat_lahir', 'no_jkn', 'gol_darah', 'status_kematian'];
}
