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
        return redirect("/")->with("creado",true);
        
    }

    public function Listar(Request $request){
        $personas = Persona::all();
        return view("listarPersonas",[
            "personas" => $personas
        ]);
    }

    public function Eliminar(Request $request, $idPersona){
        $persona = Persona::findOrFail($idPersona);
        $persona -> delete();

        return redirect("/")->with("modificado",true);

    }

    public function CargarFormularioDeModificacion(Request $request, $idPersona){
        $persona = Persona::findOrFail($idPersona);
        return view("formularioModificarPersonas",[
            "persona" => $persona
        ]);
    }

    public function Modificar(Request $request){
        $persona = Persona::find($request -> post("id"));
        
        $persona -> nombre = $request -> post("nombre");
        $persona -> apellido = $request -> post("apellido");
        $persona -> correo = $request -> post("correo");

        $persona -> save();

        return redirect("/")->with("modificado",true);


    }
}
