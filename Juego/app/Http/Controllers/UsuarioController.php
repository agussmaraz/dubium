<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function show(){
        $usuarios = User::all();
        return view('usuarios')->with('usuarios', $usuarios);
    }
}
