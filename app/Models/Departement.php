<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'

    ];
        /**
     * Get the diagnosis for the blog post.
     */
    public function diagnosis(): HasMany
    {
        return $this->hasMany(Diagnosis::class);
    }
}
