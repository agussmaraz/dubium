<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth;


class UsuarioController extends Controller
{
    public function show()
    {
        $usuarios = User::orderBy('puntos', 'desc')->take(3)->get();
        $foto = Auth::user()->avatar;
        dd($foto);

        // dd($usuarios);
        return view('perfil')->with('usuarios', $usuarios, 'foto', $foto);
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
                $usuario->perfil = $usuario->perfil + 1;
                $usuario->save();
            } else {
                $usuario->perfil = $usuario->perfil - 1;
                $usuario->save();
            }
        }
        return redirect('/admin/usuarios');
    }
    public function showDelete($id)
    {
        $usuario = User::find($id);
        return view('/admin/eliminar')->with('usuario', $usuario);
    }
    public function delete($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('/admin/usuarios');
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
}
