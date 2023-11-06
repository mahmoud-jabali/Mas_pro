<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class specialties extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded;
    protected $softDelete = true;
    public function docters(): HasMany
    {
        return $this->hasMany(Docters::class , 'specialties_id');
    } 
}
