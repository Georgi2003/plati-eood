<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Power;

class PowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Power::create([
            'kW' => 66,
            'horse_power' => 88
        ]);
    }
}
