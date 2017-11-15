<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatColonia extends Model
{
    protected $table = 'cat_colonia';

    protected $fillable = [
        'id', 'idCodigoPostal', 'nombre',
    ];

    public function domicilios()
    {
        return $this->hasMany('App\Models\Domicilio');
    }

    public function codigoPostal()
    {
        return $this->belongsTo('App\Models\Carpeta');
    }
}
