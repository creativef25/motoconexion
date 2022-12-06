<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    protected $fillable = ['nombre', 'clave', 'modelo', 'precio', 'descripcion', 'id_marca', 'id_categoria'];


    public function imagenes(){
        return $this->hasMany('App\Image', 'id_producto', 'id');
    }
} 
