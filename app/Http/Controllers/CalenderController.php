<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calender;
use App\Models\Plan;


class CalenderController extends Controller
{
    public function index(Calender $calender,Plan $plan)
    {
       return view('/calenders/index')->with(['calender' => $calender,'plan' => $plan]);
    }
}