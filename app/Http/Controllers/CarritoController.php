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

    public function add_producto(Producto $produ){
        $carri = \Session::get('carrito');
        $produ->cantidad = 1;
        $carri[$produ->id] = $produ;

        dd($carri);
    }
}
