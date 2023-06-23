<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_User extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'tutorial_id',
    'step_id',
    'edit_goal',
    'edit_current',
    'edit_content',
    'type_id',
];

    public function user() {
        return $this->belongsTo(User::class);
    }
 
    public function types() {
        return $this->hasMany(Type::class);
    }
    
    public function tutorial() {
        return $this->belongsTo(Tutorial::class);
    }
    
    public function step() {
        return $this->belongsTo(Step::class);
    }
    
}