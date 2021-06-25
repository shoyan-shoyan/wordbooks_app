<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
