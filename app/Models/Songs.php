<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Songs extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'name',
        'duration',
        'order',
    ];

    public function albums(): BelongsTo
    {
        return $this->belongsTo(Albums::class);
    }
}
