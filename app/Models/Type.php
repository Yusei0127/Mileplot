<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'title',
    'type_goal',
    'type_current',
    ];

    public function getPaginateByLimit(int $limit_count = 4)
    {
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function users()   
    {
    return $this->hasMany(User::class);  
    }
    
    public function tutorial()   
    {
    return $this->belongsTo(Tutorial::class);  
    }
    
    public function type_user()   
    {
    return $this->belongsTo(Type_User::class);  
    }
    
}