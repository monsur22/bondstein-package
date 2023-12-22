<?php

namespace Bondstein\Crud\Http\Controllers;

use Bondstein\Crud\Models\Todo;
use App\Http\Controllers\Controller;
use Bondstein\Crud\Http\Requests\TodoRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {

        $todos = Todo::all();
        return view('BondsteinCrud::index',compact('todos'));
    }

    public function create()
    {
        return view('BondsteinCrud::create');
    }

    public function store(TodoRequest $request)
    {
        $validatedData = $request->validated();

        try {
            $todo = Todo::create($validatedData);
            if ($todo) {
                return redirect('/todos')->with('success', 'Todo created successfully!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create todo']);
        }

        return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create todo']);
    }


    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('BondsteinCrud::edit', compact('todo'));
    }

    public function update(TodoRequest  $request, $id)
    {
        try {
            $todo = Todo::findOrFail($id);
            $validatedData = $request->validated();
            $todo->update($validatedData);
            return redirect('/todos')->with('success', 'Todo updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to update todo']);
        }
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect('/todos')->with('success', 'Delete successfully!');
    }
}
