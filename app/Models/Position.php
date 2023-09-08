<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TreatmentPosition;

class Position extends Model
{
    use HasFactory;

    protected $table = 'positions';
    public $incrementing = false;

    public static function getByRole($role_id){
    	$data = Position::where('role_id', $role_id)->get();
    	return $data;
    }

    public static function getByTreatment($id){
    	$tpid = [];
    	$tp = TreatmentPosition::find($id);
    	if($tp){
    		$tpid = explode(',', $tp->position_id);
    	}
    	$data = Position::whereIn('id', $tpid)->get();
    	return $data;
    }
}
