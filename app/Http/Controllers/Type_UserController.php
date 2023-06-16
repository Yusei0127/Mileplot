<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Type_User;

class Type_UserController extends Controller
{
    public function index(User $user,Profile $profile)
    {
       return view('/profiles/user')->with(['user' => $user,'profile' => $profile]);
    }
    public function create()
    {
       return view('/profiles/create');
    }
    public function show(Profile $profile)
    {
        return view('/profiles/show')->with(['profile' => $profile]);
        return view('/follows/show')->with(['profile' => $profile]);
    }

}