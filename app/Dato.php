<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{ 
    protected $table = 'datos';

    protected $fillable = ['nombre', 'ape_Paterno', 'ape_Materno', 'telefono', 'edad', 'calle', 'ciudad', 'colonia', 'alcaldia', 'codigoPostal', 'tipo_entrega', 'id_usuario'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
