<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Volume;

class VolumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Volume::create([
        	'value' => 1000
    	]);
    }
}
