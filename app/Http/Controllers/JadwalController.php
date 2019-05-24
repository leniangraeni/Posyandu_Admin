<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\JadwalPosyandu;

class JadwalController extends Controller
{
    public function tambahJadwal()
    {
        return view('jadwal.tambah');
    }

    public function simpanJadwal(){
        JadwalPosyandu::create([
            'tanggal' => request('tanggal'),
            'tempat' => request('tempat')
        ]);
        
    }
}
