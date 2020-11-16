<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CivilResponsibilityRequest extends Model
{
    protected $fillable = [
    	'registration_number',
		'coupon_number',
		'coupon_file',
		'phone',
		'adress',
		'vehicle_type',
		'kW',
		'horse_power',
		'volume',
		'year_production',
		'status',
		'payments_count',
		'insurance_company_id',
		'user_id',
	];

	public function insuranceCompany()
    {
    	return $this->belongsTo('App\Models\InsuranceCompany');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
