<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class AreaController extends Controller

{
    public function principal(){
        return view('area');  
    }
}