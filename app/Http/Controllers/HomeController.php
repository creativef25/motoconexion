<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Categoria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $re)
    {
        $hola = $re->user()->authorizeRoles(['user', 'admin']);

        if ($hola->name == 'admin') {
            $marcas = Marca::all();
            $categorias = Categoria::all();
            return view('motoconexion.administrador', compact('marcas', 'categorias'));
        } else {
            return view('motoconexion.perfil');
        }
        
    }
}
