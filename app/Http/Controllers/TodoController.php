<?php

namespace App\Http\Controllers;

use App\Models\Cat;

use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
    
    public function index(){
        $todo = Todo::all();
        return view('index-todo')->with('todos', $todo);
    }

    public function details(Todo $todo){
        return view('details-todo')->with('todos', $todo);
    }

    public function edit(Todo $todo){
        $cat = Cat::all();
        return view('edit-todo')->with('todos', $todo)->with('cats',$cat);
    }
    
    public function update(Request $request,Todo $todo){

        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'catid' => ['required']
        ]);
        
        $todo->title = $request->input('name');
        $todo->description = $request->input('description');
        $todo->cat_id = $request->input('catid');
        $todo->save();

        session()->flash('success', 'Todo updated successfully');

        return redirect('/todo');
    }
    
    public function delete(Todo $todo){
        $todo->delete();
        return redirect('/todo');
    }

    public function create(){
        $cat = Cat::all();
        return view('create-todo')->with('cats', $cat);
    }
    
    public function store(Request $request){

        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'catid' => ['required']
        ]);

        $todo = new Todo();
        
        $todo->title = $request->input('name');
        $todo->description = $request->input('description');
        $todo->cat_id = $request->input('catid');
        $todo->save();

        session()->flash('success', 'Todo created succesfully');

        return redirect('/todo');
    }

}
