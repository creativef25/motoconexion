<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function guardarProducto(Request $re){
        Producto::create($re->all());

        return redirect()->route('home');
    }

    public function eliminarProducto($id){
        Producto::where('id',$id)->delete();
        return redirect()->route('home');
    }

    public function actualizarProducto(Request $re, $id){
        Producto::where('id', $id)->update([
                                            'nombre' => $re->nombre,
                                            'clave' => $re->clave,
                                            'modelo' => $re->modelo,
                                            'precio' => $re->precio,
                                            'descripcion' => $re->descripcion,
                                            'id_marca' => $re->id_marca,
                                            'id_categoria' => $re->id_categoria
                                            ]);
        return redirect()->route('home');
    }
}
