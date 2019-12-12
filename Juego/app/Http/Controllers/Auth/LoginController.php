<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //Validacion
    function validar_login (Request $req) {
    $reglas = [
        "email" => "required|min:10|max:150|e-mail|unique:users,mail|filled",
        "password" => "required|min:10|max:150|unique: users,password|filled"
    ];

    $mensajes = [
        "filled" => "El campo :attribute no puede estar vacio.",
        "e-mail" => "El campo :attribute no es un email.",
        "required" => "El campo :attribute es oblidatorio.",
        "min" => "El campo :attribute debe tener como mínimo :min caracteres.",
        "max" => "El campo :attribute debe tener como máximo :max caracteres.",
        "unique" => "El campo :attribute es invalido o ya esta registrado."
    ];

    $this->validate($req, $reglas, $mensajes);
    return redirect('/login');
    }

    use AuthenticatesUsers;
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
