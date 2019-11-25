<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function show(){
        $usuarios = User::orderBy('puntos', 'desc')->take(3)->get();
        // dd($usuarios);
        return view('perfil')->with('usuarios', $usuarios);
    }
}
