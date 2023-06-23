<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Step extends Model
{
    use HasFactory;
    use SoftDeletes;
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