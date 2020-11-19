<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaskoRequest extends Model
{
    protected $fillable = [
    	'coupon_file',
    	'name',
    	'phone',
    	'email',
    	'status',
    	'message',
	];

	private static function getRequestsByStatus(string $status)
	{
		return static::where('status', $status)->get();
	}

	public static function newRequests()
	{
		return static::getRequestsByStatus(config('consts.KASKO_REQUEST_NEW'));
	}

	public static function offeredRequests()
	{
		return static::getRequestsByStatus(config('consts.KASKO_REQUEST_OFFER_MADE'));
	}

	public static function dealMadeRequests()
	{
		return static::getRequestsByStatus(config('consts.KASKO_REQUEST_DEAL_MADE'));
	}

	public static function archiveRequests()
	{
		return static::getRequestsByStatus(config('consts.KASKO_REQUEST_ARCHIVE'));
	}
}
