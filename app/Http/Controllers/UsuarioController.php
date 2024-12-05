<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuarioController extends Controller
{
    public function ingresa(){
        return view("Usuario.registro");
    }
    public function registrar(Request $request){
        $nombre = $request->input("nombre");
        $apellido = $request->input("apellido");

        $usuario = New Usuario();
        $usuario->nombre = $nombre;
        $usuario->apellido = $apellido;
        $usuario->save();
        return redirect("/Lista/Usuarios");

    }
    public function eliminar(int $id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect("/Lista/Usuarios");
    }
    public function actualiza(int $id, string $nombre){
        $usuario = Usuario::find($id);
        $usuario->nombre = $nombre;
        $usuario->save();
        return redirect("/Lista/Usuarios");
    }
    public function lista(){
        $usuarios = Usuario::all();
        return view("Usuario.lista")->with("usuarios",$usuarios);
    }
}
