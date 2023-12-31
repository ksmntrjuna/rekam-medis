<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = 'photos';
    protected $dates = ['date'];
    protected $fillable = ['photo', 'patient_name', 'position', 'date', 'user_id', 'note', 'created_at', 'updated_at', 'treatment_code', 'treatment_id', 'brand_id'];
    public $incrementing = false;

    public static function getByDate($date, $nobase)
    {
        $data = Photo::select('photos.photo', 'positions.name as position', 'photos.branch', 'users.name', 'users.role', 'photos.treatment_code')
            ->join('users', 'users.id', 'photos.user_id')
            ->join('positions', 'positions.id', 'photos.postreat_id')
            ->whereDate('date', $date)
            ->where('nobase', $nobase)
            ->where('treatment_code', NULL)
            ->get();
        return $data;
    }

    public static function getByTreatment($date, $nobase)
    {
        $data = Photo::whereDate('date', $date)
            ->where('nobase', $nobase)
            ->where('treatment_code', '!=', NULL)
            ->groupBy('treatment_code')
            ->orderBy('treatment_code', 'asc')
            ->get();
        return $data;
    }

    public static function getByDateT($date, $nobase, $treatment)
    {
        $data = Photo::select('photos.photo', 'positions.name as position', 'photos.branch', 'users.name', 'users.role', 'photos.treatment_code')
            ->join('users', 'users.id', 'photos.user_id')
            ->join('positions', 'positions.id', 'photos.postreat_id')
            ->whereDate('date', $date)
            ->where('nobase', $nobase)
            ->where('treatment_code', $treatment)
            // ->where(function($q) use ($treatment){
            //     $q->where('treatment_code', '!=', NULL)
            //     ->where('treatment_code', $treatment);
            // })
            ->get();
        return $data;
    }

    public static function getLast($nobase)
    {
        $data = Photo::where('nobase', $nobase)->orderBy('created_at', 'desc')->first();
        return $data;
    }

    public static function compare($nobase, $date, $position)
    {
        $data = Photo::where('nobase', $nobase)
            // ->whereDate('date', '<=', $date)
            ->where('position', $position)
            ->orderBy('created_at', 'desc')
            // ->limit(2)
            ->get();
        return $data;
    }

    public function treatmentPosition()
    {
        return $this->belongsTo(TreatmentPosition::class, 'postreat_id', 'id');
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'nobase', 'nobase');
    }
    // public function getPositionsByTreatment($treatmentId)
    // {
    //     try {
    //         // Ambil data posisi berdasarkan perawatan
    //         $positions = Position::where('treatment_id', $treatmentId)->get();

    //         // Kembalikan data dalam format JSON
    //         return response()->json(['status' => 'success', 'data' => $positions]);
    //     } catch (\Exception $e) {
    //         // Tangani kesalahan jika terjadi
    //         return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
    //     }
    // }    

    public function getPositionsByTreatment($treatmentId)
    {
        $positions = Position::where('treatment_id', $treatmentId)->get();

        // Format data posisi, termasuk postreat_id
        $formattedPositions = $positions->map(function ($position) {
            return [
                'id' => $position->id,
                'name' => $position->name,
                'postreat_id' => $position->postreat_id,
            ];
        });

        return response()->json(['status' => 'success', 'data' => $formattedPositions]);
    }
}
