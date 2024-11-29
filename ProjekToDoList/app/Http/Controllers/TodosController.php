<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todos::all();
        $data = compact('todos');
        return view('welcome')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'work' => 'required',
            'duedate' => 'required'
        ]);
        $todo = new Todos();
        $todo->name = $request['name'];
        $todo->work = $request['work'];
        $todo->duedate = $request['duedate'];
        $todo->save();
        return redirect(route('todo.home'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todos::find($id);
        $data = compact('todo');
        return view('update')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'work' => 'required',
            'duedate' => 'required'
        ]);
        $id = $request['id'];
        $todo = Todos::find($id);

        $todo->name = $request['name'];
        $todo->work = $request['work'];
        $todo->duedate = $request['duedate'];
        $todo->save();
        return redirect(route('todo.home'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Todos::find($id)->delete();
        return redirect(route('todo.home'));
    }
}
