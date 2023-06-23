<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use HasFactory;
    use SoftDeletes;
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