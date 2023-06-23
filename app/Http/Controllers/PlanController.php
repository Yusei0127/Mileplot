<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;


class PlanController extends Controller
{
    public function create()
    {
       return view('/plans/create');
    }
    public function store(Request $request, Plan $plan)
    {
        $input = $request['plan'];
        $plan->fill($input)->save();
        return redirect('/plan/' . $plan->id);
    }
    public function show(Plan $plan)
    {
        return view('/plans/show')->with(['plan' => $plan]);
    }

}