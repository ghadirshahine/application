<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_text','comment', 
    ];
    puplic function educators(){
    	return $this->belongsTo('App/Models/Educator','educator_id');
    }
    puplic function posts(){
    	return $this->belongsTo('App/Models/Post','post_id');
    }
    /*puplic function counselor(){
    	return $this->hasMany('App/Models/Counselor','counselor_id');
    }*/
}
