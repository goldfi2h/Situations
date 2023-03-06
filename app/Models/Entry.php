<?php

namespace App\Models;

use App\Models\Situation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entry extends Model
{
    use HasFactory;

    protected $table = 'entries';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
    ];
    public function expansions(): HasMany
    {
        return $this->hasMany(Expansion::class);
    }
    public function situations(): BelongsToMany
    {
        return $this->belongsToMany(Situation::class);
    }
}
