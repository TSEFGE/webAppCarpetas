<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatTipoDeterminacion extends Model
{
    protected $table = 'cat_tipo_determinacion';

    protected $fillable = [
        'id', 'nombre',
    ];
}
