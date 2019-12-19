<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
use App\Race;

class DogsController extends Controller
{
    public function dogs()
    {
        $dogs = Dog::getDogs();
        
        return view('dogs', compact('dogs'));
    }

    public function store(Request $request)
    {
        Dog::create($request->input());

        return json_encode($request->input());
    }

    public function edit($id)
    {
        $races = Race::all();
        $dog = Dog::find($id);

        return view("edit-dog", compact("dog", "races"));
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request)
    {
        $dog = Dog::find($request->id);

        $dog->update($request->all());
        $dog->save();

        return json_encode($dog);
    }

    public function destroy($id)
    {
        $dog = Dog::find($id);
        $dog->delete();

        return json_encode($id);
    }
}
