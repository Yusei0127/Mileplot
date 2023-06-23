<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;
    protected $fillable = [
    'tutorial_id',
    'content',
    'scheduled_date',
    'achievement_date',
];

    public function type_Users() {
        return $this->hasMany(Type_User::class);
    }
    
    public function tutorials() {
        return $this->hasMany(Tutorial::class);
    }
    
}