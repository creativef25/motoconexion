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

    public function eliminarImagen($id){
        $img = Image::find($id);
        $eliminar = $img->path;
        \Storage::delete($eliminar);
        Image::where('id', $id)->delete();
        return redirect()->route('home');

    }

    public function actualizarImagen(Request $re, $id){
        
        $file = $re->file('imagen');
        if (empty($file)) {
            Image::where('id', $id)->update([
                                                'id_producto' => $re->id_producto,
                                                'imgPrincipal' => ($re->imgPrincipal == '1' ? 1 : 0),
                                                'banner' => ($re->banner == '1' ? 1 : 0),
                                                'nombre' => $re->nombre
                                            ]);
        } else {
            $nombre = $file->getClientOriginalName();
            
            $img = Image::find($id);
            $eliminar = $img->path;
            $img->path = $nombre;
            $img->id_producto = $re->id_producto;
            $img->imgPrincipal = ($re->imgPrincipal == '1' ? 1 : 0);
            $img->banner = ($re->banner == '1' ? 1 : 0);
            $img->nombre = $re->nombre;
            $img->save();

            \Storage::delete($eliminar);
            \Storage::disk('local')->put($nombre, \File::get($file));            

        }

        return redirect()->route('home');
        
    }
}
