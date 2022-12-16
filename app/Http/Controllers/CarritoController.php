<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Categoria;
use App\Dato;
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

    public function actualizar_cantidad(Producto $producto, $cantidad){
        $carri = \Session::get('carrito');
        $carri[$producto->id]->cantidad = $cantidad;
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

    public function checkout(){
        $carri = \Session::get('carrito');
        $total = $this->total();
        return view('motoconexion.checkout', compact('carri', 'total'));
    }

    public function productosAll(){
        $productos = Producto::paginate(6);
        return view('motoconexion.productosAll', compact('productos'));
    }

    public function detalleProducto($id){
        $producto = Producto::find($id);
        $productoS = Producto::inRandomOrder()->take(5)->get();

        return view('motoconexion.detalleProducto', compact('producto', 'productoS'));
    }

    public function eliminarTodo(){
        \Session::flush();
        return redirect()->route('showCarrito');
    }

    public function actualizarTipoentrega(Request $re){

        if ($re->valor == "1") {
            $dato = Dato::where('id_usuario', \Auth::user()->id)->update(['tipo_entrega' => 0]);
        } else {
            $dato = Dato::where('id_usuario', \Auth::user()->id)->update(['tipo_entrega' => 1]);
        }
        
        return $dato;
    }
}
