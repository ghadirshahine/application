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
}
