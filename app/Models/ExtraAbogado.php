<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraAbogado extends Model
{
    public $table = 'extra_abogado';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idVariablesPersona',
        'cedulaProf',
        'sector',
        'correo'
    ];

    public function variablesPersona()
    {
       return $this->belongsTo('app/Models/VariablesPersona');
    }

    public function extraDenunciante()
    {
       return $this->belongsTo('app/Models/ExtraDenunciante');
    }

    public function extraDenunciado()
    {
       return $this->belongsTo('app/Models/ExtraDenunciado');
    }
}
