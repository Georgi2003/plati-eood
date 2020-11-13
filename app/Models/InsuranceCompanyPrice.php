<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCompanyPrice extends Model
{
    public $timestamps = false;

    protected $fillable = [
    	'vehicle_type',
		'kW',
		'horse_power',
		'volume',
		'vehicle_registration_code',
		'year_production',
		'payments_count',
		'insurance_company_id'
	];
}
