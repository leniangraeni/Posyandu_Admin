<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPemeriksaanIbu extends Model
{
    protected $fillable = ['ibu_id', 'berat_badan', 'tinggi_badan', 'tensi', 'lila', 'tanggal_pemeriksaan'];

}
