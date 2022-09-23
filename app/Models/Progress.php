<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule_id',
        'name',
        'remark',
        'date',
        'created_by',
        'updated_by',
    ];

    public function schedule()
    {
        return $this->belongsTo(Scheduling::class);
    }

    public function progressboqscheduling()
    {
        return $this->hasMany(ProgressBoqScheduling::class);
    }

    public function attachable()
    {
        return $this->hasMany(Attachable::class);
    }
}
