<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //este metodo es para una unica ruta
    public function __invoke()
    {
        return view('home');
    }
}
