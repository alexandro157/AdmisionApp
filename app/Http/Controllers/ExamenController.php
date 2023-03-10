<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class ExamenController extends Controller
{
    public function examen(){
        return view('examen');  
    }
}