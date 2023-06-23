<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Type;
use App\Models\Tutorial;
use App\Models\Step;
use Illuminate\Support\Facades\Auth;
use App\Models\Type_User;

class Type_UserController extends Controller
{
    public function index(Type $type,Tutorial $tutorial,Step $step)
    {
       return view('/type_users/index')->with(['type' => $type,'tutorial' => $tutorial,'step' => $step]);
    }
    public function show(Type $type,Tutorial $tutorial,Step $step)
    {
        return view('/type_users/show')->with(['type' => $type,'tutorial' => $tutorial,'step' => $step]);
    }
     public function edit(Type $type,Tutorial $tutorial,Step $step)
    {
        return view('/type_users/edit')->with(['type' => $type,'tutorial' => $tutorial,'step' => $step]);
    }
    public function update(Type_UserRequest $request, Type_User $type_user)
    {
    $input_type_user = $request['type_user'];
    $type_user->fill($input_type_user)->save();
    return redirect('/type_users/' . $type_user->id);
    }
    public function nice(Type $type, Request $request){
        $nice=New Nice();
        $nice->type_id=$type->id;
        $nice->user_id=Auth::user()->id;
        $nice->save();
        return back();
    }
    public function unnice(Type $type, Request $request){
        $user=Auth::user()->id;
        $nice=Nice::where('type_id', $type->id)->where('user_id', $user)->first();
        $nice->delete();
        return back();
    }
    
}