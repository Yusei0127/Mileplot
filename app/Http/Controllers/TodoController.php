<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Todo;

class TodoController extends Controller
{
    public function create()
    {
       return view('/todos/create');
    }
    public function store(Request $request, Todo $todo)
    {
        $input = [];
        $input = $request['todo'];
        $todo->fill($input)->save();
        return redirect('/todos/' . $todo->id);
    }
    public function show(Todo $todo)
    {
        return view('/todos/show')->with(['todo' => $todo]);
    }

}