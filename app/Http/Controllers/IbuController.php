<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ibu;

class IbuController extends Controller
{
    public function tambahDataIbu()
    {
        return view('ibu.tambah');
    }

    public function simpanDataIbu()
    {
        Ibu::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'no_kk'=> request('no_kk'),
            'nik' => request('nik'),
            'alamat' => request('alamat'),
            'no_telp' => request('no_telp'),
            'nama_suami' => request('nama_suami'),
            'tanggal_lahir' => request('tanggal_lahir'),
            'tempat_lahir' => request('tempat_lahir'),
            'no_jkn' => request('no_jkn'),
            'gol_darah' => request('gol_darah'),
            'status_kematian' => request('status_kematian')
        ]);

        return redirect()->route('ibu.index');
        
    }

    public function readDataIbu()
    {
        $ibu = Ibu::all();

        return view('ibu.index', compact('ibu'));
    }

    public function detailDataIbu($id)
    {
        $ibu = Ibu::find($id);

        return view('ibu.detail', compact('ibu'));
    }
    
    public function editDataIbu($id)
    {
        $ibu = Ibu::find($id);

        return view('ibu.edit', compact('ibu'));
    }

    public function updateDataIbu($id)
    {
        $ibu = Ibu::find($id);

        $ibu->update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'no_kk'=> request('no_kk'),
            'nik' => request('nik'),
            'alamat' => request('alamat'),
            'no_telp' => request('no_telp'),
            'nama_suami' => request('nama_suami'),
            'tanggal_lahir' => request('tanggal_lahir'),
            'tempat_lahir' => request('tempat_lahir'),
            'no_jkn' => request('no_jkn'),
            'gol_darah' => request('gol_darah'),
            'status_kematian' => request('status_kematian')
        ]);

        return redirect()->route('ibu.index');
    }

    public function hapusDataIbu($id)
    {
        $ibu = Ibu::find($id);
        $ibu->delete();

        return redirect()->route('ibu.index'); 
    }
}
