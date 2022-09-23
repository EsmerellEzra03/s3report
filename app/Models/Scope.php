<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scope extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'name',
        'description',
        'created_by',
        'updated_by',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function assign()
    {
        return $this->hasMany(Assign::class);
    }

    public function scope()
    {
        return $this->hasMany(Boqs::class);
    }
}
