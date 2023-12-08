<?php

namespace App\Models;

use App\Models\Position;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Treatment extends Model
{
	use HasFactory;
	protected $table = 'treatments';
	protected $fillable = ['code', 'name', 'brand_id'];

	public function brand()
	{
		return $this->belongsTo(Brand::class, 'brand_id');
	}

	public static function getByRoleAndBrand($roleId, $brandId)
	{
		return self::where('role_id', $roleId)
			->whereHas('brand', function ($query) use ($brandId) {
				$query->where('id', $brandId);
			})
			->get();
	}

	public static function getByTreatment($id)
	{
		$tpid = [];
		$tp = TreatmentPosition::find($id);
		if ($tp) {
			$tpid = explode(',', $tp->position_id);
		}
		$data = Treatment::whereIn('id', $tpid)->get();
		return $data;
	}

	public function positions()
	{
		return $this->belongsToMany(Position::class, 'positions_treatments', 'treatment_id', 'position_id');
	}

	public function brands()
	{
		return $this->belongsToMany(Brand::class);
	}
}
