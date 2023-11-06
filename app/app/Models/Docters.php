<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Docters extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'description',
        'specialties_id',
        'photo',
    ];
    public function specialties(): BelongsTo
    {
        return $this->BelongsTo(specialties::class);
    }
    public function reservation(): HasMany
    {
        return $this->HasMany(reservation::class);
    }
}
