<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatEstadoCivil extends Model
{
    protected $table = 'cat_estado_civil';

    protected $fillable = [
        'id', 'idMunicipio', 'nombre',
    ];
}
