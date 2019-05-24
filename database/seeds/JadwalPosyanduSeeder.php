<?php

use Illuminate\Database\Seeder;
use App\JadwalPosyandu;

class JadwalPosyanduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JadwalPosyandu::create([
            'tanggal' => '2010/10/10',
            'tempat' => 'Dimana aja kapan aja hahahaha'
        ]);
     }
}
