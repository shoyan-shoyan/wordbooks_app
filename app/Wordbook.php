<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Wordbook extends Model
{
    protected $fillable = ['bookname'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function words()
    {
        return $this->hasMany(Word::class);
    }
    
    public function loadRelationshipCounts()
    {
        $this->loadCount('words');
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'likes')->withTimestamps();
    }

    public function isLikedBy(?User $user): bool
    {
        return $user
            ? (bool)$this->likes->where('id', $user->id)->count()
            : false;
    }

    public function getCountLikesAttribute(): int
    {
        return $this->likes->count();
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany('App\Tag', 'wordbook_tag')->withTimestamps();
    }
}
