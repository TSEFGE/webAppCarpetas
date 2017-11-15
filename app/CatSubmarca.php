<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatSubmarca extends Model
{
    protected $table = 'cat_submarca';

    protected $fillable = [
        'id', 'idMarca', 'nombre',
    ];
}
