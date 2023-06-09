<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function follower()
    {
        return $this->belongsToMany('App\Models\User', 'follows', 'follower_id', 'followee_id')->withTimestamps();
    }

    public function followee()
    {
        return $this->belongsToMany('App\Models\User', 'follows', 'followee_id', 'follower_id')->withTimestamps();
    }
    
    public function profile()   
    {
    return $this->hasOne(Profile::class);  
    }
    
    public function tutorial()   
    {
    return $this->belongsTo(Tutorial::class);  
    }
    
    public function type()   
    {
    return $this->belongsTo(Type::class);  
    }
    
    public function todo()   
    {
    return $this->belongsTo(Todo::class);  
    }
    
    public function home()   
    {
    return $this->hasOne(Home::class);  
    }
 
    public function type_users() 
    {
    return $this->hasOne(Type_User::class);
    }
    
    public function calender()   
    {
    return $this->belongsTo(Calender::class);  
    }
    
}