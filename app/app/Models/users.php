<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class users extends Model
{
    use HasFactory;
    protected $guarded;

    public function reservation(): HasMany
    {
        return $this->HasMany(reservation::class);
    }
}
