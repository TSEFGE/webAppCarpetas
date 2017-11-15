<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatMarca extends Model
{
    protected $table = 'cat_marca';

    protected $fillable = [
        'id', 'nombre',
    ];

    public function vehiculos(){
        return $this->hasMany('App\Models\Vehiculo'):
    }

    public function submarcas(){
        return $this->hasMany('App\Models\CatSubMarca'):
    }
}
