<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_text',//'comment', 
    ];
    /*public function educator(){
    	return $this->belongsTo(Educator::class);
    }
    
    public function counselors(){
    	return $this->hasMany(Counselor::class);
    }*/
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function replies(){
        return $this->hasMany(Reply::class);
    }

}
