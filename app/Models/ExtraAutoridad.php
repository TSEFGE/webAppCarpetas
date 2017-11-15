<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraAutoridad extends Model
{
    protected $table = 'extra_autoridad';

    protected $fillable = [
        'id', 'idCarpeta', 'idVariablesPersona', 'antiguedad', 'rango', 'horarioLaboral',
    ];

    public function carpeta()
    {
        return $this->belongsTo('App\Models\Carpeta');
    }

    public function variablesPersona()
    {
        return $this->belongsTo('App\Models\VariablesPersona');
    }
}
