<?php

use Illuminate\Database\Seeder;
use App\DataPemeriksaanAnak;

class DataPemeriksaanAnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataPemeriksaanAnak::create([
            'anak_id' => '1',
            'berat_badan' => '10',
            'tinggi_badan' => '35',
            'imunisasi' => 'Flu',
            'tanggal_pemeriksaan' => '2019/12/11'
        ]);
    }
}
