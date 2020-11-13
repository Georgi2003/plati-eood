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
}
