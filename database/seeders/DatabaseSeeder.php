<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call([
            UserSeeder::class,
        	VehicleTypeSeeder::class,
        	InsuranceCompanieSeeder::class,
        	PowerSeeder::class,
        	RegistrationNumberSeeder::class,
        	VolumeSeeder::class,
            CivilResponsibilityRequestSeeder::class,
            KaskoRequestSeeder::class,
        ]);
    }
}
