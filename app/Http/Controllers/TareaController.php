<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;


class TareaController extends Controller
{
    public function ingresa(){
        return view("Tarea.registro");
    }
    public function registrar(Request $request){
        $NombreTarea = $request->input("NombreTarea");
        $comentarios_id = $request->input("comentarios_id");
        $proyectos_id = $request->input("proyectos_id");


        $tarea = New Tarea();
        $tarea->NombreTarea = $NombreTarea;
        $tarea->comentarios_id = $comentarios_id;
        $tarea->proyectos_id = $proyectos_id;

        $tarea->save();
        return redirect("/Lista/Tareas");

    }
    public function eliminar(int $id){
        $tarea = Tarea::find($id);
        $tarea->delete();
        return redirect("/Lista/Tareas");
    }
    public function actualiza(int $id, string $NombreTarea){
        $tarea = Tarea::find($id);
        $tarea->NombreTarea = $NombreTarea;
        $tarea->save();
        return redirect("/Lista/Tareas");
    }
    public function lista(){
        $tareas = Tarea::all();
        return view("Tarea.lista")->with("tareas",$tareas);
    }
}
