<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'content',
    'todo_id',
    'schedule',
    'calender_id',
    'month',
    'plan_id',
    'time',
];
    public function user()   
    {
    return $this->belongsTo(User::class);  
    }
    
    public function todos()   
    {
    return $this->hasMany(Todo::class);  
    }
    
    public function calenders()   
    {
    return $this->hasMany(Calender::class);  
    }
    
    public function plans()   
    {
    return $this->hasMany(Plan::class);  
    }
}