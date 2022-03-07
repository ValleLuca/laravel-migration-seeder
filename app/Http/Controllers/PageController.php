<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Holiday;

class PageController extends Controller
{
    public function index(){
        $risultati = Holiday::all();
        return view('homepage', ['finale' => $risultati]);
    }
}
