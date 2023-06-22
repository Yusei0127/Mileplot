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
    public function store(Request $request, Tutorial $tutorial)
    {
        $input = $request['tutorial'];
        $tutorial->fill($input)->save();
        return redirect('/tutorials/' . $tutorial->id);
    }

}