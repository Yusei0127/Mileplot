<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    protected $fillable = [
    'follower_id',
    'followee_id',
    'icon_url',
];

    protected $table = 'follows';
    
    public function profile()   
    {
    return $this->belongsTo(Profile::class);  
    }
}