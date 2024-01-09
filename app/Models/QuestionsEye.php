<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsEye extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'answer_type',

    ];
}
