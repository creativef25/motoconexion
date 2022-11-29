<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function guardarImagen(Request $re){

        $file = $re->file('imagen');
        $nombre = $file->getClientOriginalName();

        $img = new Image();
        $img->path = $nombre;
        $img->id_producto = $re->id_producto;
        $img->imgPrincipal = ($re->imgPrincipal == '1' ? 1 : 0);
        $img->banner = ($re->banner == '1' ? 1 : 0);
        $img->nombre = $re->nombre;
        $img->save();

        \Storage::disk('local')->put($nombre, \File::get($file));

        return redirect()->route('home');

    }
}
