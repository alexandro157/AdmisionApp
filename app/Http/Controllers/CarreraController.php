<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class CarreraController extends Controller
{
    public function principal(){
        return view('carreras');  
    }
}