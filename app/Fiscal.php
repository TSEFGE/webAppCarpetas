<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiscal extends Model
{
    protected $table = 'fiscal';

    protected $fillable = [
        'id', 'idUnidad', 'nombres',  'primerAp', 'segundoAp', 'correo', 'password', 'numFiscal', 'nivel',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
