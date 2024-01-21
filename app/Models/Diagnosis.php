<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];

    public function patients()
    {
        return $this->belongsToMany(Patient::class);
    }
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
}
