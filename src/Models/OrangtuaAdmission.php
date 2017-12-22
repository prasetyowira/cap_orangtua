<?php

namespace Ariwira\Orangtua\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class OrangtuaAdmission extends Model
{
    protected $table = 'ot_admission';

	protected $fillable = [
		'name', 'link', 'image',
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];
}
