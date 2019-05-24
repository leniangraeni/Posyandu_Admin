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

    public function simpanJadwal()
    {
        JadwalPosyandu::create([
            'tanggal' => request('tanggal'),
            'tempat' => request('tempat')
        ]);

        return redirect()->route('jadwal.index');
        
    }

    public function readJadwal()
    {
        $jadwals = JadwalPosyandu::all();

        return view('jadwal.index', compact('jadwals'));
    }

    public function editJadwal($id)
    {
        $jadwal = JadwalPosyandu::find($id);

        return view('jadwal.edit', compact('jadwal'));
    }

    public function updateJadwal($id)
    {
        $jadwal = JadwalPosyandu::find($id);

        $jadwal->update([
            'tanggal' => request('tanggal'),
            'tempat' => request('tempat')
        ]);

        return redirect()->route('jadwal.index');
    }

    public function hapusJadwal($id)
    {
        $jadwal = JadwalPosyandu::find($id);
        $jadwal->delete();

        return redirect()->route('jadwal.index'); 
    }
}
