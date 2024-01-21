<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'diagnosis_id',
        'user_id',
        // أي متغيرات أخرى
    ];


    public function diagnosis()
    {
        return $this->belongsTo(Diagnosis::class);
    }

     /**
     * Get the user that owns the phone.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
