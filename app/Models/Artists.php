<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Artists extends Model
{
    use HasFactory;

    public function albums(): HasMany
    {
        return $this->hasMany(Albums::class);
    }

    public function songs(): HasManyThrough
    {
        return $this->hasManyThrough(Songs::class, Albums::class);
    }
}
