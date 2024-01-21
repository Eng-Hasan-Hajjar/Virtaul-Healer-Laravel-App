<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'specialty', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function diagnosis()
    {
        return $this->belongsToMany(Diagnosis::class);
    }
}
