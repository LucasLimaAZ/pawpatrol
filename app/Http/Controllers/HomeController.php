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
        return view("store-dog");
    }

    public function storeRace()
    {
        return view("store-race");
    }
}
