<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheduling extends Model
{
    use HasFactory;

    protected $fillable = [
        'assign_id',
        'boq_id',
        'quantity',
        'start_date',
        'end_date',
        'created_by',
        'updated_by',
    ];

    public function assign()
    {
        return $this->belongsTo(Assign::class);
    }

    public function boq()
    {
        return $this->belongsTo(Boq::class);
    }

    public function boqscheduling()
    {
        return $this->hasMany(BoqScheduling::class);
    }
}
