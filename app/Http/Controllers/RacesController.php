<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;

class RacesController extends Controller
{
    public function races()
    {
        $races = Race::all();

        return view("races", compact("races"));
    }

    public function store(Request $request)
    {
        Race::create($request->input());

        return json_encode($request->input());
    }

    public function edit($id)
    {
        $race = Race::find($id);

        return view("edit-race", compact("race"));
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request)
    {
        $race = Race::find($request->id);

        $race->update($request->all());
        $race->save();

        return json_encode($race);
    }

    public function destroy($id)
    {
        $race = Race::find($id);
        $race->delete();

        return json_encode($id);
    }
}
