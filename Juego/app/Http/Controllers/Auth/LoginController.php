<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

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
    // El método de redireccionamiento se encarga de enviar al usuario al proveedor de OAuth
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    // mientras que el método de usuario leerá la solicitud entrante y recuperará la información del usuario del proveedor.
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        // return $user->id;
        // dd($user);
        $finduser = User::where('google_id', $user->id)->first();

        if ($finduser) {

            Auth::login($finduser);
            return redirect('/home');
        } else {
            $newUser = User::create([
                'nombre' => $user->name,
                'email' => $user->email,
                'google_id' => $user->id,

                // 'avatar' => $user->picture,
            ]);
            // dd($user->id);
            $newUser->save();
            Auth::login($newUser);
            // dd($newUser);

            return redirect()->back();
        }
    }

    // return = $user->id;
    // return redirect('/home');





    //Validacion
    function validar_login(Request $req)
    {
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
