<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentPosition extends Model
{
    use HasFactory;
    protected $table = 'positions_treatments';
    protected $fillable = ['position_id', 'treatment_id'];

    public function positions()
    {
        return $this->belongsToMany(Position::class, 'positions_treatments', 'treatment_id', 'position_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
