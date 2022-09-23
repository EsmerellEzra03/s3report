<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    use HasFactory;

    protected $fillable = [
        'contractor_id',
        'scope_id',
        'created_by',
        'updated_by',
    ];

    public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }

    public function scope()
    {
        return $this->belongsTo(Scope::class);
    }

    public function scheduling()
    {
        return $this->hasMany(Scheduling::class);
    }
}
