<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;
use App\Dog;

class HomeController extends Controller
{
    public function index()
    {
        $dogs = Dog::all();

        return view("home", compact("dogs"));
    }

    public function storeDog()
    {
        $races = Race::all();

        return view("store-dog", compact("races"));
    }

    public function storeRace()
    {
        return view("store-race");
    }
}
