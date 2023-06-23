<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tutorial extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
    'user_id',
    'type_id',
];
 
    public function type_Users() {
        return $this->hasMany(Type_User::class);
    }
    
    public function step() {
        return $this->belongsTo(Step::class);
    }
    
    public function type() {
        return $this->hasMany(Type::class);
    }
    
}