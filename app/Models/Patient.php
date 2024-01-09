<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function diagnosis()
    {
        return $this->belongsTo(Diagnosis::class);
    }

}
