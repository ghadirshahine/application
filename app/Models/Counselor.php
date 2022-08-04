<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    use HasFactory;
    protected $fillable = [
        'counselor_image','counselor_name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*public function posts(){
    	return $this->hasMany(Post::class);
    }
    public function comments(){
    	return $this->hasMany(Comment::class);
    }*/
    /*public function user(){
        return $this->belongsTo(User::class);
    }*/
}
