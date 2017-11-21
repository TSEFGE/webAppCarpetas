<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carpeta extends Model
{
    public $table = 'carpeta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idUnidad',
        'idFiscal',
        'numCarpeta',
        'fechaInicio',
        'conDetenido',
        'esRelevante',
        'estadoCarpeta',
        'horaIntervencion',
        'descripcionHechos',
        'npd',
        'numIph',
        'fechaIph',
        'narracionIph',
        'ipTipoDeterminacion',
        'fechaDeterminacion'        
    ];

    public function acusaciones()
    {
       return $this->hasMany('app/Models/Acusacion');
    }

    public function acumulaciones()
    {
       return $this->hasMany('app/Models/Acumulacion');
    }

    public function extraAutoridades()
    {
       return $this->hasMany('app/Models/ExtraAutoridad');
    }

    public function tipifDelitos()
    {
       return $this->hasMany('app/Models/TipifDelito');
    }

    public function unidad()
    {
        return $this->belongsTo('app/Models/Unidad');
    }

    public function fiscal()
    {
        return $this->belongsTo('app/User');
    }    

    public function tipoDeterminacion()
    {
        return $this->belongsTo('app/Models/CatTipoDeterminacion');
    }
}
