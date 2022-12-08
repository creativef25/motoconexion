<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;

class CarritoController extends Controller
{

    public function __construct(){
        if(!\Session::has('carrito')) \Session::put('carrito', array());
    }


    public function principal(){

        $productos = Producto::inRandomOrder()->take(5)->get();
        $categorias = Categoria::inRandomOrder()->take(6)->get();


        return view('motoconexion.indexT', compact('productos', 'categorias'));
    }

    public function show_carrito(){
        $carri = \Session::get('carrito');
        $total = $this->total();
        return view('motoconexion.showCarrito', compact('carri', 'total'));
    }

    public function add_producto(Producto $producto){
        $carri = \Session::get('carrito');
        $producto->cantidad = 1;
        $carri[$producto->id] = $producto;

        \Session::put('carrito', $carri);

        return redirect()->route('showCarrito');
    }

    public function eliminar_producto(Producto $producto){
        $carri = \Session::get('carrito');
        unset($carri[$producto->id]);
        \Session::put('carrito', $carri);
        return redirect()->route('showCarrito');
    }

    private function total(){
        $carri = \Session::get('carrito');
        $total = 0;
        foreach ($carri as $value){
            $total += $value->precio * $value->cantidad;
        }
        return $total;
    }

    public function eliminarTodo(){
        \Session::flush();
        return redirect()->route('showCarrito');
    }
}
