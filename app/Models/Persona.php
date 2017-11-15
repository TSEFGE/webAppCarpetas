<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';

    protected $fillable = [
        'id', 'nombres', 'primerAp', 'segundoAp', 'fechaNacimiento', 'rfc', 'curp', 'sexo', 'idNacionalidad', 'idEtnia', 'idLengua', 'idEstadoOrigen', 'idMunicipioOrigen', 'esEmpresa',
    ];
}
