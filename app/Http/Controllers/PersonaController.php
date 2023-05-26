<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function Insertar(Request $request){
        $p = new Persona;

        $p -> nombre = $request -> post("nombre");
        $p -> apellido = $request ->post("apellido");
        $p -> correo = $request -> post("correo");

        $p -> save();
        $personas = Persona::all();
        return view("listarPersonas",[
            "personas" => $personas,
            "insertado" => true
        ]);
    }

    public function Listar(Request $request){
        $personas = Persona::all();
        return view("listarPersonas",[
            "personas" => $personas
        ]);
    }

    public function Eliminar(Request $request, $idPersona){
        $persona = Persona::find($idPersona);
        $persona -> delete();

        $personas = Persona::all();
        return view("listarPersonas",[
            "personas" => $personas,
            "eliminado" => true
        ]);
    }
}
