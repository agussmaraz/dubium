<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class UsuarioController extends Controller
{
    public function show()
    {
        $usuarios = User::orderBy('puntos', 'desc')->take(3)->get();
        $foto = Auth::user()->avatar;
        
        return view('perfil')->with('usuarios', $usuarios)->with('foto', $foto);
    }
    public function admin()
    {
        $usuarios = User::all();
        return view('/admin/usuarios')->with('usuarios', $usuarios);
    }


    //Edita el perfil del usuario para que sea admin o para que el admin sea usuario
    public function showEdit($id)
    {
        $usuario = User::find($id);
        return view('/admin/editar')->with('usuario', $usuario);
    }
    public function update(Request $request, $id)
    {
        if (isset($request)) {
            $usuario = User::find($id);
            if ($usuario->perfil == 0) {
                $usuario->perfil =  1;
                $usuario->save();
            } else {
                $usuario->perfil = 0;
                $usuario->save();
            }
        }
        return redirect('/admin/usuarios');
    }
  
    public function delete($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return response()->json($usuario);
    }
    
    public function nuevo()
    {
        return view('/admin/admins');
    }
    public function agregar(Request $req)
    {
        $admin = new \App\User();
        $admin->nombre = $req['name'];
        $admin->email = $req['e-mail'];
        $admin->password = Hash::make($req['password']);
        $admin->perfil = $admin->perfil + 1;
        $admin->save();

        return redirect('/admin/admins');
    }

    public function editar($id)
    {
        // dd($id);
        $usuario = User::find($id);
        return view('/editarFoto')->with('usuario', $usuario);
    }

    public function updateFoto(Request $req, $id)
    {
        // dd($req);
        $usuario = User::find($id);
        $foto = $req['avatar'];
        $path = $foto->getClientOriginalExtension();
        $ruta = $foto->storeAs(
            "public",
            $usuario->nombre . '.' . $path
        );
        $nombreArchivo = basename($ruta);
        $usuario->avatar = $nombreArchivo;
        // dd($usuario->avatar);
        $usuario->save();
        return redirect('/perfil');
    }

    public function perfil($id)
    {
        $user = User::find($id);
        $usuario = $user->perfil;
        //    $usuario = Auth::user()->perfil;
        if ($usuario === 0) {
            $usuario = 1;
            // $usuario->update();
        } else {
            $usuario = 0;
            // $usuario->update();
        }
        $user->perfil = $usuario;
        $user->save();
        return response()->json($usuario);
    }   
}
