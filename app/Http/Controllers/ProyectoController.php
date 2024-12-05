<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;


class ProyectoController extends Controller
{
    public function ingresa(){
        return view("Proyecto.registro");
    }
    public function registrar(Request $request){
        $NombreProyecto = $request->input("NombreProyecto");
        $usuarios_id = $request->input("usuarios_id");

        $proyecto = New Proyecto();
        $proyecto->NombreProyecto = $NombreProyecto;
        $proyecto->usuarios_id = $usuarios_id;
        $proyecto->save();
        return redirect("/Lista/Proyecto");

    }
    public function eliminar(int $id){
        $proyecto = Proyecto::find($id);
        $proyecto->delete();
        return redirect("/Lista/Proyecto");
    }
    public function actualiza(int $id, string $NombreProyecto){
        $proyecto = Proyecto::find($id);
        $proyecto->NombreProyecto = $NombreProyecto;
        $proyecto->save();
        return redirect("/Lista/Proyecto");
    }
    public function lista(){
        $proyectos = Proyecto::all();
        return view("Proyecto.lista")->with("proyectos",$proyectos);
    }
}
