<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatEstado extends Model
{
    protected $table = 'cat_estado';

    protected $fillable = [
        'id', 'nombre', 'abreviatura',
    ];
}
