<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(IbuSeeder::class);
        // $this->call(JadwalPosyanduSeeder::class);
        // $this->call(AnakSeeder::class);
        // $this->call(DataPemeriksaanIbuSeeder::class);
        $this->call(DataPemeriksaanAnakSeeder::class);

    }
}
