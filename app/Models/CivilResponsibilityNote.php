<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CivilResponsibilityNote extends Model
{
    protected $fillable = [
    	'message',
    	'civil_responsibility_request_id',
    	'user_id',
	];
}
