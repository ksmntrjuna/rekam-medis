<?php

namespace App\Models;

use App\Models\Position;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Treatment extends Model
{
    use HasFactory;
    protected $table = 'treatments';

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

}
