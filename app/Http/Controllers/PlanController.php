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
    public function edit(Plan $plan)
    {
        return view('/plan/edit')->with(['plan' => $plan]);
    }
    public function update(PlanRequest $request, Plan $plan)
    {
        $input_plan = $request['plan'];
        $plan->fill($input_plan)->save();
        return redirect('/plans/' . $plan->id);
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
    public function delete(Plan $plan)
    {
        $plan->delete();
        return redirect('/');
    }

}