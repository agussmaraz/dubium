<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class SocialiteController extends Controller
{

    // El método de redireccionamiento se encarga de enviar al usuario al proveedor de OAuth
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    // mientras que el método de usuario leerá la solicitud entrante y recuperará la información del usuario del proveedor.
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        return $user->token;
    }
}
