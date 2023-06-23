<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step;
use App\Models\Tutorial;

class TutorialController extends Controller
{
    public function create(Step $step)
    {
       return view('/tutorials/create')->with(['step' => $step]);
    }
    public function edit(Step $step)
    {
        return view('/tutorials/edit')->with(['step' => $step]);
    }
    public function update(TutorialRequest $request, Tutorial $tutorial)
    {
        $input_tutorial = $request['tutorial'];
        $tutorial->fill($input_tutorial)->save();
        return redirect('/tutorials/' . $tutorial->id);
    }
    public function store(Request $request, Tutorial $tutorial)
    {
        $input = $request['tutorial'];
        $tutorial->fill($input)->save();
        return redirect('/tutorials/' . $tutorial->id);
    }
    public function delete(Tutorial $tutorial)
    {
        $tutorial->delete();
        return redirect('/');
    }

}