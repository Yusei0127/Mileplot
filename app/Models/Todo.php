<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'content',
];
    public function users()   
    {
    return $this->hasMany(User::class);  
    }
    public function home()   
    {
    return $this->belongsTo(Home::class);  
    }
}