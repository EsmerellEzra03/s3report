<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoqScheduling extends Model
{
    use HasFactory;

    protected $fillable = [
        'boq_id',
        'scheduling_id',
        'quantity',
        'completed',
        'percentage',
        'created_by',
        'updated_by',
    ];

    public function boq()
    {
        return $this->belongsTo(Boqs::class);
    }

    public function scheduling()
    {
        return $this->belongsTo(Scheduling::class);
    }

    public function progressboqscheduling()
    {
        return $this->hasMany(ProgressBoqScheduling::class);
    }
}
