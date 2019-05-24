<?php

use Illuminate\Database\Seeder;
use App\Ibu;

class IbuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ibu::create([
            'name' => 'Leni',
            'email' => 'leniangraeni@yahoo.com',
            'password' => 'Hai',
            'no_kk'=> '7402',
            'nik' => '740',
            'alamat' => 'Dramaga',
            'no_telp' => '081',
            'nama_suami' => 'Tidak ada',
            'tanggal_lahir' => '1998/07/02',
            'tempat_lahir' => 'Bumi',
            'no_jkn' => '086999',
            'gol_darah' => 'O',
            'status_kematian' => 'Tidak'
        ]);
    }
}
