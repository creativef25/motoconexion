<?php

namespace App\Http\Controllers;
use App\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function guardarMarca(Request $re){

        Marca::create($re->all());

        return redirect()->route('home');
        
    }

    public function eliminarMarca($id){
        Marca::where('id',$id)->delete();
        return redirect()->route('home');
    }

    public function actualizarMarca(Request $re, $id){
        Marca::where('id', $id)->update(['nombre'=>$re->nombre]);
        return redirect()->route('home');
    }
}
