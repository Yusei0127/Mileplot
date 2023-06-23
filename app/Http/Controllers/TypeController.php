<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Step;
use App\Models\Tutorial;
use App\Models\Type;
use App\Models\Type_User;


class TypeController extends Controller
{
    public function index(Type $types,Step $steps,Tutorial $tutorials)
    {
       return view('/types/index')->with(['type' => $types->getPaginateByLimit()]);
       return view('/types/index')->with(['type' => $types ->get() ,'step' => $steps ->get(),'tutorial' => $tutorials ->get()]);
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
    public function show(Types $types,Step $steps,Tutorial $tutorials,Nice $nice)
    {
       $nice=Nice::where('type_id', $type->id)->where('user_id', auth()->user()->id)->first();
       return view('/types/show')->with(['type' => $types ->get() ,'step' => $steps ->get(),'tutorial' => $tutorials ->get(),'nice' => $nice ->get()]);
    }

}