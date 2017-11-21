<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Narracion extends Model
{
    public $table = 'narracion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idVariablesPersona',
        'narracion'
    ];

    public function variablesPersona()
    {
       return $this->belongsTo('app/Models/VariablesPersona');
    }
}
