<?php

namespace App\Models;

use App\Models\Bonus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    // public function personality(): HasMany
    // {
    //     return $this->hasMany(Personality::class);
    // }
    
}
