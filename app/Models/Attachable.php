<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachable extends Model
{
    use HasFactory;

    protected $fillable = [
        'progress_id',
        'name',
        'type',
        'created_by',
        'updated_by',
    ];

    public function progress()
    {
        return $this->belongsTo(Progress::class);
    }

}
