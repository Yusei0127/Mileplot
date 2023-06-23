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
    public function store(Request $request, Todo $todo)
    {
        $input = $request['todo'];
        $todo->fill($input)->save();
        return redirect('/todos/' . $todo->id);
    }

}