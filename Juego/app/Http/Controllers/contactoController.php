<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    function mensaje_contacto(Request $request){
        $reglas = [
            "nombre" => "filled|min:5|max:45",
            "email" => "filled|min:5|max:45",
            "asunto" => "filled|min:5|max:45",
            "mensaje" => "filled|min:25|max:150"
        ];
        $mansajes = [
            "filled" => "El campo :attribute no puede quedar vacio",
            "min" => "El campo :attribute debe tener como mínimo :min caracteres",
            "max" => "El campo :attribute debe tener como máximo :max caracteres"
        ];
        $this->validate($request, $reglas, $mansajes);
        return redirect("/contacto");
    }
}
