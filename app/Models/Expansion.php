<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expansion extends Model
{
    use HasFactory;

    protected $fillable = [
        'entry_id',
        'name',
    ];

    public function entries(): BelongsTo
    {
        return $this->belongsTo(Entry::class);
    }
}
