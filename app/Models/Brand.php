<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $tables = 'brands';

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }

    public function positions()
    {
        return $this->hasMany(Position::class);
    }

    public function treatmentPositions()
    {
        return $this->hasMany(TreatmentPosition::class);
    }

    public function outlets()
    {
        return $this->hasMany(Outlet::class);
    }
}
