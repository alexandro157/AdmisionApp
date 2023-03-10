<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class UniversidadController extends Controller
{
    public function principal(){
        return view('universidad');  
    }
}