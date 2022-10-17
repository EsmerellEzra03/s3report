<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boq extends Model
{
    use HasFactory;

    protected $fillable = [
        'scope_id',
        'name',
        'quantity',
        'created_by',
        'updated_by',
    ];

    public function scope()
    {
        return $this->belongsTo(Scope::class);
    }

    public function boqscheduling()
    {
        return $this->hasMany(BoqScheduling::class, 'boq_id');
    }
}
