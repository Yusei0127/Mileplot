<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'username',
    'icon_url',
    'head_url',
    'introduction',
];
    public function user()   
    {
    return $this->belongsTo(User::class);  
    }
    
    public function follow()   
    {
    return $this->hasOne(Follow::class);  
    }
    
}