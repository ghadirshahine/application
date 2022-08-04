<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
         'countent', 
    ];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
    /*public function educator()
    {
        return $this->belongsTo(Educator::class);
    }*/
    public function user()
    {
        return $this->belongsTo(Educator::class);
    }
}
