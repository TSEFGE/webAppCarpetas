<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';

    protected $fillable = [
        'id', 'nombres', 'primerAp', 'segundoAp', 'fechaNacimiento', 'rfc', 'curp', 'sexo', 'idNacionalidad', 'idEtnia', 'idLengua', 'idEstadoOrigen', 'idMunicipioOrigen', 'esEmpresa',
    ];

    public function familiares(){
    	return $this->hasMany('App\Models\Familiar'):
    }

    public function nacionalidad(){
    	return $this->belongsTo('App\Models\CatNacionalidad'):
    }

    public function etnia(){
    	return $this->belongsTo('App\Models\CatEtnia'):
    }

    public function lengua(){
    	return $this->belongsTo('App\Models\CatLengua'):
    }

    public function estado(){
    	return $this->belongsTo('App\Models\CatEstado'):
    }

    public function municipio(){
    	return $this->belongsTo('App\Models\CatMunicipio'):
    }

    public function variablesPersonas(){
    	return $this->hasMany('App\Models\VariablesPersona'):
    }


}
