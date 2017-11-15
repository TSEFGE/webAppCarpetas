<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatMarca extends Model
{
    protected $table = 'cat_marca';

    protected $fillable = [
        'id', 'nombre',
    ];
}
