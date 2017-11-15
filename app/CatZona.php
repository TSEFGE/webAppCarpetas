<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatZona extends Model
{
    protected $table = 'cat_zona';

    protected $fillable = [
        'id', 'nombre',
    ];
}
