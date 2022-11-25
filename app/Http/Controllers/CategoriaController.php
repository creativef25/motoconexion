<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function guardarCategoria(Request $re){
        Categoria::create($re->all());
        return redirect()->route('home');
    }

    public function eliminarCategoria($id){
        Categoria::where('id', $id)->delete();
        return redirect()->route('home');
    }

    public function actualizarCategoria(Request $re, $id){
        Categoria::where('id', $id)->update(['nombre'=>$re->nombre]);
        return redirect()->route('home');
    }
}
