<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory;
    use SoftDeletes;
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