<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    function validar_registro(Request $req) {
        $reglas = [
            "nombre" => "required|min:5:|max:45|unique:users, nombre|filled",
            "email" => "required|min:5|max:45|unique:users, email|filled",
            "password" => "required|min:6|max:45|unique:users, password|filled",
            "avatar" => "required|filled"
        ];
        $mensajes = [
            "filled" => "El campo :attribute no puede estar vacio.",
            "required" => "El campo :attribute es oblidatorio.",
            "min" => "El campo :attribute debe tener como mínimo :min caracteres.",
            "max" => "El campo :attribute debe tener como máximo :max caracteres.",
            "unique" => "El campo :attribute es invalido o ya esta registrado."
        ];
        $this->validate($req, $reglas, $mensajes);
        return redirect('/register');
    }


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validates = Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['file'],
        ]);

        return $validates;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $foto = $data['avatar'];
        $path = $foto->getClientOriginalExtension();
        $ruta = $foto->storeAs(
            "public", $data['nombre']. '.' .$path
        );
        $nombreArchivo = basename($ruta);
        return User::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $nombreArchivo,


        ]);
    }
}
