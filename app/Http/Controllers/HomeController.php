<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
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
