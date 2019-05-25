<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ibu;
use App\Anak;

class AnakController extends Controller
{
    public function tambahDataAnak(Ibu $ibu)
    {
        return view('anak.tambah', compact('ibu'));
    }

    public function simpanDataAnak(Ibu $ibu)
    {
        Anak::create([
            'ibu_id' => request('ibu_id'),
            'nama' => request('nama'),
            'nik' => request('nik'),
            'no_akta_kelahiran' => request('no_akta_kelahiran'),
            'tanggal_lahir' => request('tanggal_lahir'),
            'tempat_lahir' => request('tempat_lahir'),
            'gol_darah' => request('gol_darah')
        ]);

        return redirect()->route('ibu.detail', compact('ibu'));
    }

    public function readDataAnak(Ibu $ibu)
    {
        $anak = Anak::where('ibu_id', $ibu->id)->get();
        return view('anak.index', compact('anak'));
    }

    public function detailDataAnak($id)
    {
        $anak = Anak::find($id);

        return view('anak.detail', compact('anak'));
    }

    public function editDataAnak($id)
    {
        $anak = Anak::find($id);

        return view('anak.edit', compact('anak'));
    }

    public function updateDataAnak($id)
    {
        $anak = Anak::find($id);
        Anak::update([
            'ibu_id' => request('ibu_id'),
            'nama' => request('nama'),
            'nik' => request('nik'),
            'no_akta_kelahiran' => request('no_akta_kelahiran'),
            'tanggal_lahir' => request('tanggal_lahir'),
            'tempat_lahir' => request('tempat_lahir'),
            'gol_darah' => request('gol_darah')
        ]);

        return redirect()-back();
    }

    public function hapusDataAnak($id)
    {
        $anak = Anak::find($id);
        $anak->delete();

        return redirect()->back(); 
    }
}
