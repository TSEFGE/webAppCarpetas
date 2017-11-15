<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    protected $table = 'familiar';

    protected $fillable = [
        'id', 'idPersona', 'nombres', 'primerap', 'segundoAp', 'parentesco', 'idOcupacion',
    ];
}
