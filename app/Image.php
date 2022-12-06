<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = ['path', 'id_producto', 'imgPrincipal', 'banner', 'nombre'];


    public function producto(){
        return $this->belongsTo('App\Producto','id_producto', 'id');
    }
}
