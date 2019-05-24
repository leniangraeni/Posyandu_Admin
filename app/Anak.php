<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $fillable = ['ibu_id', 'nama', 'nik', 'no_akta_kelahiran', 'tanggal_lahir',
                            'tempat_lahir', 'gol_darah'];
}
