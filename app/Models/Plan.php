<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
    'calender_id',
    'time',
    'schedule',
];
    
    public function calender()   
    {
    return $this->hasMany(Calender::class);  
    }
    
}