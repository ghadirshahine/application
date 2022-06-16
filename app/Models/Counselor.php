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
    puplic function posts(){
    	return $this->hasMany('App/Models/Post','post_counselor');
    }
    /*puplic function comments(){
    	return $this->hasMany('App/Models/Comment','comment_id');
    }*/
}
