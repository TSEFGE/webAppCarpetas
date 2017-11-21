<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';

    protected $fillable = [
        'id', 'idTipifDelito', 'status', 'placas', 'idEstado', 'idMarca', 'idSubmarca', 'modelo', 'nrpv', 'idColor', 'permiso', 'numSerie', 'numMotor', 'idClaseVehiculo', 'idTipoVehiculo', 'idTipoUso', 'senasPartic', 'idProcedencia', 'idAseguradora',
    ];

    public function tipifDelito()
    {
        return $this->belongsTo('App\Models\TipifDelito');
    }

    public function estado()
    {
        return $this->belongsTo('App\Models\CatEstado');
    }

    public function marca()
    {
        return $this->belongsTo('App\Models\CatMarca');
    }

    public function submarca()
    {
        return $this->belongsTo('App\Models\CatSubmarca');
    }

    public function color()
    {
        return $this->belongsTo('App\Models\CatColor');
    }

    public function claseVehiculo()
    {
        return $this->belongsTo('App\Models\CatClaseVehiculo');
    }

    public function tipoVehiculo()
    {
        return $this->belongsTo('App\Models\CatTipoVehiculo');
    }

    public function tipoUso()
    {
        return $this->belongsTo('App\Models\CatTipoUso');
    }

    public function procedencia()
    {
        return $this->belongsTo('App\Models\CatProcedencia');
    }

    public function aseguradora()
    {
        return $this->belongsTo('App\Models\CatAseguradora');
    }
}