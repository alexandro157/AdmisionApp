<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;


class RegistroController extends Controller
{
    public function create() {
        
        return view('auth.registro');
    }
    public function store() {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'telefono' => 'required',
        ]);

        $user = User::create(request(['name', 'email', 'password', 'telefono']));

        auth()->login($user);
        return redirect()->to('/');
    }
}
