<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boqs extends Model
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

    public function scheduling()
    {
        return $this->hasMany(Scheduling::class);
    }
}
