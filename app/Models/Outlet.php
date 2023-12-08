<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
	use HasFactory;

	protected $table = 'outlets';

	public static function check($code)
	{
		$data = Outlet::where('code', $code)->first();
		if ($data) {
			return $data;
		} else {
			return (object)['outlet_name' => null, 'outlet_address' => null];
		}
	}

	public function brand()
	{
		return $this->belongsTo(Brand::class);
	}
}
