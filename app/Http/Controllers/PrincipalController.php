<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PrincipalController extends Controller
{
    public function principal(){
        return view('principal');  
    }
}