<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatColonia extends Model
{
    protected $table = 'cat_colonia';

    protected $fillable = [
        'id', 'idMunicipio', 'nombre','codigoPostal',
    ];

    public function domicilios()
    {
        return $this->hasMany('App\Models\Domicilio');
    }

    public function municipio()
    {
        return $this->belongsTo('app/Models/CatMunicipio');
    }
}
