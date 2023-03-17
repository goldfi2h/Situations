<?php

namespace App\Models;

use App\Models\Situation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function situations(): BelongsToMany
    {
        return $this->belongsToMany(Situation::class);
    }
}
