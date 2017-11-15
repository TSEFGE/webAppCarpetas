<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatArma extends Model
{
    protected $table = 'cat_arma';

    protected $fillable = [
        'id', 'idTipoArma', 'nombre',
    ];

    public function tipifDelitos()
    {
        return $this->hasMany('App\Models\TipifDelito');
    }

    public function tipoArma()
    {
        return $this->belongsTo('App\Models\CatTipoArma');
    }
}
