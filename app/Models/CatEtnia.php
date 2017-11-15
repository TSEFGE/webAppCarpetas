<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatEtnia extends Model
{
    protected $table = 'cat_etnia';

    protected $fillable = [
        'id', 'nombre',
    ];
}
