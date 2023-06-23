<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function create()
    {
       return view('/todos/create');
    }
    public function edit(Todo $todo)
    {
        return view('/todos/edit')->with(['todo' => $todo]);
    }
    public function update(TodoRequest $request, Todo $todo)
    {
        $input_todo = $request['todo'];
        $todo->fill($input_todo)->save();
        return redirect('/todos/' . $todo->id);
    }
    public function store(Request $request, Todo $todo)
    {
        $input = $request['todo'];
        $todo->fill($input)->save();
        return redirect('/todos/' . $todo->id);
    }
    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
}