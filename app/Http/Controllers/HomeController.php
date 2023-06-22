<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Calender;
use App\Models\Plan;
use App\Models\User;
use App\Models\Home;

class HomeController extends Controller
{
    public function index(User $user,Home $home,Todo $todo,Plan $plan,Calender $calender)
    {
       return view('/homes/index')->with(['user' => $user,'home' => $home,'todo' => $todo,'plan' => $plan,'calender' => $calender]);
    }
}