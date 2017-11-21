<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatEstado extends Model
{
    protected $table = 'cat_estado';

    protected $fillable = [
        'id', 'nombre', 'abreviatura',
    ];

    public function personas(){
    	return $this->hasMany('App\Models\Persona');
    }

    public function domicilios(){
    	return $this->hasMany('App\Models\Domicilio');
    }

    public function municipios(){
    	return $this->hasMany('App\Models\CatMunicipio');
    }

    public function vehiculos(){
    	return $this->hasMany('App\Models\Vehiculo');
    }
}
