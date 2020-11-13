<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InsuranceCompany;

class InsuranceCompanieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InsuranceCompany::insert([
            ['name' => 'Лев Инс'],
            ['name' => 'Групама'],
            ['name' => 'ЗАД “ОЗК - Застраховане” АД'],
            ['name' => 'Армеец'],
        ]);
    }
}
