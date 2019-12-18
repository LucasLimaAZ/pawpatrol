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

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
