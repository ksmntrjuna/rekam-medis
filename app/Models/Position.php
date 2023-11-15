<?php

namespace App\Models;

use App\Models\Treatment;
use App\Models\TreatmentPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
	use HasFactory;

	protected $table = 'positions';
	public $incrementing = false;

	public static function getByRole($role_id)
	{
		$data = Position::where('role_id', $role_id)->get();
		return $data;
	}

	public static function getByTreatment($id)
	{
		$tpid = [];
		$tp = TreatmentPosition::find($id);
		if ($tp) {
			$tpid = explode(',', $tp->position_id);
		}
		$data = Position::whereIn('id', $tpid)->get();
		return $data;
	}

	public function treatments()
	{
		return $this->belongsToMany(Treatment::class, 'positions_treatments', 'position_id', 'treatment_id');
	}

	public function brand()
	{
		return $this->belongsTo(Brand::class, 'brand_id');
	}

	public function treatmentPositions()
    {
        return $this->belongsToMany(TreatmentPosition::class, 'positions_treatments', 'position_id', 'treatment_id');
    }
}
