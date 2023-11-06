<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class reservation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'docter_id', 'appointment_date', 'appointment_time'];
    public function doctor(): BelongsTo
    {
        return $this->BelongsTo(Docters::class , 'docters_id');
    }
    public function users(): BelongsTo
    {
        return $this->BelongsTo(users::class , 'user_id');
    }
}
