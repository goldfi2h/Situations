<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Entry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Situation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'bonus',
        'neutral',
        'punishment',
    ];

    public function entries(): BelongsToMany
    {
        return $this->belongsToMany(Entry::class)
        ->withPivot(['true_description'])
        ->as('customData');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
