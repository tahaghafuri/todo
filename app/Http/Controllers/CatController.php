<?php

namespace App\Http\Controllers;

use App\Models\Cat;

use Illuminate\Http\Request;

use App\Models\Todo;

class CatController extends Controller
{

    public function index(){
        $cat = Cat::all();
        return view('index-cat')->with('cats', $cat);
    }

    public function details(Cat $cat){
        return view('details-cat')->with('cats', $cat);
    }

    public function edit(Cat $cat){
        return view('edit-cat')->with('cats', $cat);
    }
    
    public function update(Request $request,Cat $cat){

        $request->validate([
            'name' => ['required'],
            'description' => ['required']
        ]);
        
        $cat->name = $request->input('name');
        $cat->description = $request->input('description');
        $cat->save();

        session()->flash('success', 'Cat updated successfully');

        return redirect('/cat');
    }
    
    public function delete(Cat $cat){
        $todo = Todo::query()->where('cat_id',$cat->id);
        $todo=$todo->fetch_array();
        if(count($todo) == 0){
            $cat->delete();
            return redirect('/cat');
        }else{
            session()->flash('error', 'Can\'t Remove Not Empty Cat(Have Todos)');
            return redirect('/cat');
        }
    }

    public function create(){
        $cat = Cat::all();
        return view('create-cat')->with('cats', $cat);
    }
    
    public function store(Request $request){

        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'catid' => ['required']
        ]);

        $cat = new Cat();
        
        $cat->name = $request->input('name');
        $cat->description = $request->input('description');
        $cat->save();

        session()->flash('success', 'Cat created succesfully');

        return redirect('/todo');
    }

}
