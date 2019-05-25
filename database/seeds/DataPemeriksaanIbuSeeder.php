<?php

use Illuminate\Database\Seeder;
use App\DataPemeriksaanIbu;

class DataPemeriksaanIbuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataPemeriksaanIbu::create([
            'ibu_id' => '1',
            'berat_badan' => '60',
            'tinggi_badan' => '155',
            'tensi' => '10',
            'lila' => '20',
            'tanggal_pemeriksaan' => '2019/11/12'
        ]);
    }
}
