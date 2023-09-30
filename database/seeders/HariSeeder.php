<?php

namespace Database\Seeders;

use App\Models\Hari;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['hari' => 'senin'],
            ['hari' => 'selasa'],
            ['hari' => 'rabu'],
            ['hari' => 'kamis'],
            ['hari' => 'jumat'],
            ['hari' => 'sabtu'],
            ['hari' => 'minggu'],
        ];

        Hari::insert($data);
    }
}
