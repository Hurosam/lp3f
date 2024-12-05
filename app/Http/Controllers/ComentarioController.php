<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;


class ComentarioController extends Controller
{
    public function ingresa(){
        return view("Comentario.registro");
    }
    public function registrar(Request $request){
        $NombreCom = $request->input("NombreCom");
        $usuarios_id = $request->input("usuarios_id");

        $comentario = New Comentario();
        $comentario->NombreCom = $NombreCom;
        $comentario->usuarios_id = $usuarios_id;
        $comentario->save();
        return redirect("/Lista/Comentarios");

    }
    public function eliminar(int $id){
        $comentario = Comentario::find($id);
        $comentario->delete();
        return redirect("/Lista/Comentarios");
    }
    public function actualiza(int $id, string $NombreCom){
        $comentario = Comentario::find($id);
        $comentario->NombreCom = $NombreCom;
        $comentario->save();
        return redirect("/Lista/Comentarios");
    }
    public function lista(){
        $comentarios = Comentario::all();
        return view("Comentario.lista")->with("comentarios",$comentarios);
    }
}
