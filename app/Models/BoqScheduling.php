<?php

namespace App\Models;

use App\Models\BoqScheduling;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BoqScheduling extends Model
{
    use HasFactory;
    protected $table = 'boq_schedulings';

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
        return $this->belongsTo(Boq::class);
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
