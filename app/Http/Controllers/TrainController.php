<?php

namespace App\Http\Controllers;

use App\Train;

class TrainController extends Controller
{
    //| Funziona per andare in Home
    public function home()
    {
        $trains = Train::all();
        return view('home', compact('trains'));
    }
}
