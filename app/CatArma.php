<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatArma extends Model
{
    protected $table = 'cat_arma';

    protected $fillable = [
        'id', 'idTipoArma', 'nombre',
    ];
}
