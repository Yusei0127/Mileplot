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
    public function store(Request $request, Step $step)
    {
        $input = $request['step'];
        $step->fill($input)->save();
        return redirect('/steps/' . $step->id);
    }

}