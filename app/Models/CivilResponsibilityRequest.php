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

    public function messages()
    {
    	return $this->hasMany('App\Models\Message');
    }

    /*___*/
    private static function getRequestsByStatusAndUser(string $status)
	{
		$query = static::where('status', $status);

		if(\Auth::user()->isUser()){
			$query->where('user_id', \Auth::id());
		}

		return $query->get();
	}

	public static function getUnassignedRequestsByUser()
	{
		return static::getRequestsByStatusAndUser(config('consts.CIVIL_RESPONSIBILITY_REQUEST_UNASSIGNED'));
	}

	public static function getProcessedRequestsByUser()
	{
		return static::getRequestsByStatusAndUser(config('consts.CIVIL_RESPONSIBILITY_REQUEST_PROCESSED'));
	}

	public static function getCompletedRequestsByUser()
	{
		return static::getRequestsByStatusAndUser(config('consts.CIVIL_RESPONSIBILITY_REQUEST_COMPLETED'));
	}

	public static function getArchivedRequestsByUser()
	{
		return static::getRequestsByStatusAndUser(config('consts.CIVIL_RESPONSIBILITY_REQUEST_ARCHIVED'));
	}

	public static function allRequestsByUser()
	{
		return static::getRequestsByStatusAndUser(config('consts.CIVIL_RESPONSIBILITY_REQUEST_ALL'));
	}
}
