<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $table = 'domicilio';

    protected $fillable = [
        'id', 'idEstado', 'idMunicipio', 'idLocalidad', 'idCodigoPostal', 'idColonia',  'calle', 'numExterno',  'numInterno',
    ];
}
