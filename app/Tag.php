<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    public function getHashtagAttribute(): string
    {
        return '#' . $this->name;
    }
    public function wordbooks(): BelongsToMany
    {
        return $this->belongsToMany('App\Wordbook', 'wordbook_tag')->withTimestamps();
    }
}
