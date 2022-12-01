<?php

namespace App\Http\Controllers;
use App\Dato;
use Illuminate\Http\Request;

class DatoController extends Controller
{
    public function guardarDatos(Request $re){

        $registro = Dato::where('id_usuario', \Auth::id())->get();

        if (empty($registro['0']->id)) {
            $dato = new Dato();
            $dato->nombre = $re->nombre;
            $dato->ape_Paterno = $re->ape_Paterno;
            $dato->ape_Materno = $re->ape_Materno;
            $dato->telefono = $re->telefono;
            $dato->edad = $re->edad;
            $dato->calle = $re->calle;
            $dato->ciudad = $re->ciudad;
            $dato->colonia = $re->colonia;
            $dato->alcaldia = $re->alcaldia;
            $dato->codigoPostal = $re->codigoPostal;
            $dato->id_usuario = \Auth::id();
            $dato->save();
        } else {
            $dato = Dato::find($registro['0']->id);
            $dato->nombre = $re->nombre;
            $dato->ape_Paterno = $re->ape_Paterno;
            $dato->ape_Materno = $re->ape_Materno;
            $dato->telefono = $re->telefono;
            $dato->edad = $re->edad;
            $dato->save();
        } 
        return redirect()->route('home');
    }
}
