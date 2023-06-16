<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUser extends Model
{
    use HasFactory;
    protected $fillable = [
    'follower_id',
    'followee_id',
    'icon_url',
];

    protected $table = 'follows';
}