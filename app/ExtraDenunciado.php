<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraDenunciado extends Model
{
    protected $table = 'extra_denunciado';

    protected $fillable = [
        'id', 'idVariablesPersona', 'idNotificacion', 'idPuesto', 'alias', 'senasPartic', 'ingreso', 'periodoIngreso', 'residenciaAnterior', 'idAbogado', 'personasBajoSuGuarda', 'perseguidoPenalmente', 'vestimenta',
    ];
}
