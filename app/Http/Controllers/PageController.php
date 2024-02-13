<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{



    public function indice () {
        return view('indice');
    }


    public function home () {
        return view('welcome');
    }
}
