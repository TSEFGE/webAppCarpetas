<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatLocalidad extends Model
{
    protected $table = 'cat_localidad';

    protected $fillable = [
        'id', 'idMunicipio', 'nombre',
    ];
}
