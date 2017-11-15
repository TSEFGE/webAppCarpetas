<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatTipoArma extends Model
{
    protected $table = 'cat_tipo_arma';

    protected $fillable = [
        'id', 'nombre',
    ];
}
