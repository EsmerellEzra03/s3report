<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressBoqScheduling extends Model
{
    use HasFactory;

    protected $fillable = [
        'progress_id',
        'boqscheduling_id',
        'quantity',
        'percent',
        'created_by',
        'updated_by',
    ];

    public function progress()
    {
        return $this->belongsTo(Progress::class);
    }

    public function boqscheduling()
    {
        return $this->belongsTo(BoqScheduling::class);
    }

}
