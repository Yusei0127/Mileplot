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
}