<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'notificacion';

    protected $fillable = [
        'id', 'idDomicilio', 'correo', 'telefono', 'fax',
    ];
}
