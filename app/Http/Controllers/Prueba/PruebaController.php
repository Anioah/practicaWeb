<?php

namespace App\Http\Controllers\Prueba;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PruebaController extends Controller
{
    public function index(Request $request, string $nombre, string $sexo = "Indefinido" , int $edad = 18)
    {
        //return $nombre . " " . $sexo . " " . $edad;
        $color = (strtoupper($sexo) == "MASCULINO") ? "blue" : "pink";

        $datos = array(
            ["nombre"=>"Luis","ap_paterno"=>"Salas","ap_materno"=>"Ramos","sexo"=>"Masculino","edad"=>17],
            ["nombre"=>"Cristina","ap_paterno"=>"Lopez","ap_materno"=>"Crujan","sexo"=>"Femenino","edad"=>21],
            ["nombre"=>"Patricio","ap_paterno"=>"Gonzalez","ap_materno"=>"Fernandez","sexo"=>"Masculino","edad"=>18],
            ["nombre"=>"Ana","ap_paterno"=>"Perez","ap_materno"=>"Gomez","sexo"=>"Femenino","edad"=>15],
            ["nombre"=>"Enrique","ap_paterno"=>"Paterson","ap_materno"=>"Arround","sexo"=>"Masculino","edad"=>19],
            ["nombre"=>"Sofia","ap_paterno"=>"Vazquez","ap_materno"=>"Mendez","sexo"=>"Femenino","edad"=>18],
        );

        /*
        $datos[] = [
            "nombre" => ,
            "ap_paterno" => ,
            "ap_materno" => ,            
        ] 
        
        */

        return view("prueba.prueba",["nombre"=> $nombre, "sexo"=> $sexo, "edad"=> $edad, "datos"=>$datos]);
    }

    public function info(Request $request){
        return $request->all();
        return view('info',[
            "nombre" => $request->nombre,
            "apellido_paterno" => $request->apellido_paterno,
            "apellido_materno"=> $request->apellido_materno,
            "sexo" => $request->sexo,
            "edad" => $request->edad,]);
    }

    public function formulario(){
        $datos = array(
            ["nombre"=>"Luis","ap_paterno"=>"Salas","ap_materno"=>"Ramos","sexo"=>"Masculino","edad"=>17],
            ["nombre"=>"Cristina","ap_paterno"=>"Lopez","ap_materno"=>"Crujan","sexo"=>"Femenino","edad"=>21],
            ["nombre"=>"Patricio","ap_paterno"=>"Gonzalez","ap_materno"=>"Fernandez","sexo"=>"Masculino","edad"=>18],
            ["nombre"=>"Ana","ap_paterno"=>"Perez","ap_materno"=>"Gomez","sexo"=>"Femenino","edad"=>15],
            ["nombre"=>"Enrique","ap_paterno"=>"Paterson","ap_materno"=>"Arround","sexo"=>"Masculino","edad"=>19],
            ["nombre"=>"Sofia","ap_paterno"=>"Vazquez","ap_materno"=>"Mendez","sexo"=>"Femenino","edad"=>18],
            ["nombre"=>"Alfonso","ap_paterno"=>"Rodriguez","ap_materno"=>"Alcantar","sexo"=>"Masculino","edad"=>17],
        );

        return view("formulario",["datos" => json_encode($datos)]);
    }
}
