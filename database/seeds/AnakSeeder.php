<?php

use Illuminate\Database\Seeder;
use App\Anak;

class AnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anak::create([
            'ibu_id' => '1',
            'nama' => 'Lily',
            'nik' => '72340',
            'no_akta_kelahiran' => '081234',
            'tanggal_lahir' => '2001/07/02',
            'tempat_lahir' => 'Bintang',
            'gol_darah' => 'O'
        ]);
    }
}
