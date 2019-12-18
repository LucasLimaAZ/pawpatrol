<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;

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
