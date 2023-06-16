<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Step;
use App\Models\Type;

class TypeController extends Controller
{
    public function index(Type $types,Step $steps)
    {
       return view('/types/index')->with(['type' => $types->getPaginateByLimit()]);
       return view('/types/index')->with(['type' => $types->get(),'step' => $steps]);
    } 
    public function store(Request $request, Type $types)
    {
    $input = $request['type'];
    $types->fill($input)->save();
    return redirect('/types/' . $types->id);
    }
    public function create()
    {
       return view('/types/create');
    }
    public function show(Types $types,Step $steps)
    {
       return view('/types/show')->with(['type' => $types,'step' => $steps]);
    }
}