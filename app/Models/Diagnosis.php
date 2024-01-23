<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Diagnosis extends Model
{
    use HasFactory;

    protected $fillable = [
        'description'
    ];

    public function patients()
    {
        return $this->belongsToMany(Patient::class);
    }
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
       /**
     * Get the departement that owns the comment.
     */
    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }

}
