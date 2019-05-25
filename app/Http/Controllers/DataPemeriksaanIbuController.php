<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ibu;
use App\DataPemeriksaanIbu;

class DataPemeriksaanIbuController extends Controller
{
    public function tambahPemeriksaanIbu(Ibu $ibu)
    {
        return view('pemeriksaan_ibu.tambah', compact('ibu'));
    }

    public function simpanPemeriksaanIbu(Ibu $ibu)
    {
        DataPemeriksaanIbu::create([
            'ibu_id' => request('ibu_id'),
            'berat_badan' => request('berat_badan'),
            'tinggi_badan' => request('tinggi_badan'),
            'tensi' => request('tensi'),
            'lila' => request('lila'),
            'tanggal_pemeriksaan' => request('tanggal_pemeriksaan')
        ]);

        return redirect()->route('ibu.detail', compact('ibu'));
    }

    public function readPemeriksaanIbu(Ibu $ibu)
    {
        $pemeriksaan_ibu = DataPemeriksaanIbu::where('ibu_id', $ibu->id)->get();
        return view('pemeriksaan_ibu.index', compact('pemeriksan_ibu'));
    }

    public function detailPemeriksaanIbu($id)
    {
        $pemeriksaan_ibu = DataPemeriksaanIbu::find($id);

        return view('pemeriksaan_ibu.detail', compact('pemeriksaan_ibu'));
    }

    public function editPemeriksaanIbu($id)
    {
        $pemeriksaan_ibu = DataPemeriksaanIbu::find($id);

        return view('pemeriksaan_ibu.edit', compact('pemeriksaan_ibu'));
    }

    public function updatePemeriksaanIbu($id)
    {
        $pemeriksaan_ibu = DataPemeriksaanIbu::find($id);
        $pemeriksaan-ibu::create([
            'ibu_id' => request('ibu_id'),
            'berat_badan' => request('berat_badan'),
            'tinggi_badan' => request('tinggi_badan'),
            'tensi' => request('tensi'),
            'lila' => request('lila'),
            'tanggal_pemeriksaan' => request('tanggal_pemeriksaan')
        ]);

        return redirect()-back();
    }

    public function hapusPemeriksaanIbu($id)
    {
        $pemeriksaan_ibu = DataPemeriksaanIbu::find($id);
        $pemeriksaan_ibu->delete();

        return redirect()->back(); 
    }
}