<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    public $incrementing = false;

    public static function check($nobase){
    	$data = Patient::where('nobase', $nobase)->first();
    	if($data!=null){
    		return $data;
    	}else{ 
    		return (object)['id' => null];
    	}
    }

    public static function lookup($data){
    	$key = key($data);
    	$value = array_values($data)[0];
    	if($key=='kode_member'){
    		$key = 'nobase';
    	}elseif($key=='telp'){
    		$key = 'telp';
    	}else{
    		$key = 'name';
    	}
    	$d = Patient::where($key, $value)->get();
    	return $d;
    }

	public function photo(){
        return $this->hasMany(Photo::class, 'nobase', 'nobase');
    }

}
