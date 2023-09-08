<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = 'photos';
    public $incrementing = false;

    public static function getByDate($date, $nobase){
        $data = Photo::select('photos.photo', 'positions.name as position', 'photos.branch', 'users.name', 'users.role', 'photos.treatment_code')
        ->join('users', 'users.id', 'photos.user_id')
        ->join('positions', 'positions.id', 'photos.position')
        ->whereDate('date', $date)
        ->where('nobase', $nobase)
        ->where('treatment_code', NULL)
        ->get();
        return $data;
    }

    public static function getByTreatment($date, $nobase){
        $data = Photo::whereDate('date', $date)
        ->where('nobase', $nobase)
        ->where('treatment_code', '!=', NULL)
        ->groupBy('treatment_code')
        ->orderBy('treatment_code', 'asc')->get();
        return $data;
    }

    public static function getByDateT($date, $nobase, $treatment){
        $data = Photo::select('photos.photo', 'positions.name as position', 'photos.branch', 'users.name', 'users.role', 'photos.treatment_code')
        ->join('users', 'users.id', 'photos.user_id')
        ->join('positions', 'positions.id', 'photos.position')
        ->whereDate('date', $date)
        ->where('nobase', $nobase)
        ->where(function($q) use ($treatment){
            $q->where('treatment_code', '!=', NULL)
            ->where('treatment_code', $treatment);
        })
        ->get();
        return $data;
    }

    public static function getLast($nobase){
        $data = Photo::where('nobase', $nobase)->orderBy('created_at', 'desc')->first();
        return $data;
    }

    public static function compare($nobase, $date, $position){
        $data = Photo::where('nobase', $nobase)
        // ->whereDate('date', '<=', $date)
        ->where('position', $position)
        ->orderBy('created_at', 'desc')
        // ->limit(2)
        ->get();
        return $data;
    }
}
