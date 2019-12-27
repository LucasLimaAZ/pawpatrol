<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
use App\Race;
use App\Vaccine;

class DogsController extends Controller
{
    public function dogs()
    {
        $dogs = Dog::all();

        return view('dogs', compact('dogs'));
    }

    public function store(Request $request)
    {
        $obj = Dog::create($request->input());
        $dog_id = $obj->id;

        $vaccines = explode(",", $request->vaccines);

        foreach($vaccines as $vaccine){
            $store_vacine["name"] = $vaccine;
            $store_vacine["dog_id"] = $dog_id;
            Vaccine::create($store_vacine);
        }

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
        $dog = Dog::find($id);

        return view("view-dog", compact("dog"));
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
