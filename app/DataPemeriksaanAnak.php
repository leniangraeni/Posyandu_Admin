<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPemeriksaanAnak extends Model
{
    protected $fillable = ['anak_id', 'berat_badan', 'tinggi_badan', 'imunisasi', 'tanggal_pemeriksaan'];

}
