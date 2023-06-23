<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step;

class StepController extends Controller
{
    public function create(Step $step)
    {
       return view('/steps/create');
    }
    public function edit(Step $step)
    {
        return view('/steps/edit')->with(['step' => $step]);
    }
    public function update(StepRequest $request, Step $step)
    {
        $input_step = $request['step'];
        $step->fill($input_step)->save();
        return redirect('/steps/' . $step->id);
    }
    public function store(Request $request, Step $step)
    {
        $input = $request['step'];
        $step->fill($input)->save();
        return redirect('/steps/' . $step->id);
    }
    public function delete(Step $step)
    {
        $step->delete();
        return redirect('/');
    }

}