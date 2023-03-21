<?php

namespace App\Models;

use App\Models\Expansion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personality extends Model
{
    use HasFactory;

    protected $table = 'personality';

    protected $fillable = [
        // 'expansion_id',
        'name',
    ];
    
    // public function expansions(): BelongsTo
    // {
    //     return $this->belongsTo((Expansion::class));
    // }
}
