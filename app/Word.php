<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    // protected $fillable = ['content','answer'];
        
    public function wordbook()
    {
        return $this->belongsTo(Wordbook::class);
    }
}
