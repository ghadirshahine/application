<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'counselor_name', 'countent', 'like_count','comment_count',
    ];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
