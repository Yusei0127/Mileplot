<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'month',
];
    public function users()   
    {
    return $this->hasMany(User::class);  
    }
    
    public function plan()   
    {
    return $this->belongsTo(Plan::class);  
    }
    
}