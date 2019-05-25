<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Anak;
use App\DataPemeriksaanAnak;

class DataPemeriksaanAnakController extends Controller
{
    public function tambahPemeriksaanAnak(Anak $anak)
    {
        return view('pemeriksaan_anak.tambah', compact('anak'));
    }

    public function simpanPemeriksaanAnak(Anak $anak)
    {
        DataPemeriksaanAnak::create([
            'anak_id' => request('anak_id'),
            'berat_badan' => request('berat_badan'),
            'tinggi_badan' => request('tinggi_badan'),
            'imunisasi' => request('imunisasi'),
            'tanggal_pemeriksaan' => request('tanggal_pemeriksaan')
        ]);

        return redirect()->route('anak.detail', compact('anak'));
    }

    public function readPemeriksaanAnak(Anak $anak)
    {
        $pemeriksaan_anak = DataPemeriksaanAnak::where('anak_id', $anak->id)->get();
        return view('pemeriksaan_anak.index', compact('pemeriksan_anak'));
    }

    public function detailPemeriksaanAnak($id)
    {
        $pemeriksaan_anak = DataPemeriksaanAnak::find($id);

        return view('pemeriksaan_anak.detail', compact('pemeriksaan_anak'));
    }

    public function editPemeriksaanAnak($id)
    {
        $pemeriksaan_anak = DataPemeriksaanAnak::find($id);

        return view('pemeriksaan_anak.edit', compact('pemeriksaan_anak'));
    }

    public function updatePemeriksaanAnak($id)
    {
        $pemeriksaan_anak = DataPemeriksaanAnak::find($id);
        $pemeriksaan_anak::update([
            'anak_id' => request('anak_id'),
            'berat_badan' => request('berat_badan'),
            'tinggi_badan' => request('tinggi_badan'),
            'imunisasi' => request('imunisasi'),
            'tanggal_pemeriksaan' => request('tanggal_pemeriksaan'),
        ]);

        return redirect()-back();
    }

    public function hapusPemeriksaanAnak($id)
    {
        $pemeriksaan_anak = DataPemeriksaanAnak::find($id);
        $pemeriksaan_anak->delete();

        return redirect()->back(); 
    }
}