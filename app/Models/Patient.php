<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'age',
        'gender',
        /*
            زمرة الدم .
            الامراض الوراثية
            الامراض المزمنة
            عملية جراحية سابقة
        */
        'blood_type',
        'genetic_disease',
        'chronic_diseases',
        'previous_surgery',
        'number',
        'address',
        'diagnosis_id',
        'user_id',
    ];




    public function diagnosis()
    {
        return $this->belongsToMany(Diagnosis::class);
    }

     /**
     * Get the user that owns the phone.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
