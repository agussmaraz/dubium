<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function inicio(Request $request){
        $usuario = Auth::user();
        if($request['juego']){
            $usuario->puntos = $usuario->puntos +100;
            $usuario->save();
        }
        return redirect('/juego')->with('usuario', $usuario);
    }
}
