<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CivilResponsibilityRequest;

class CivilResponsibilityRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CivilResponsibilityRequest::create([
            'registration_number' => '5212',
			'coupon_number' => '7542',
			'coupon_file' => '-',
			'phone' => '08886522',
			'adress' => '„Пена Осман“ 72',
			'vehicle_type' => 110,
			'kW' => 66,
			'horse_power' => 3,
			'volume' => 1000,
			'year_production' => 2020,
			'status' => "Нова поръчка",
			'payments_count' => 2,
			'insurance_company_id' => 1,
			'user_id' => 1,
        ]);
    }
}
