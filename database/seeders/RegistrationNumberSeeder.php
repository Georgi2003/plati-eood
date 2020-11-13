<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RegistrationNumber;

class RegistrationNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegistrationNumber::create([
            'city' => 'Враца',
            'registration_number' => 'ВР'
        ]);
    }
}
