<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';

    protected $fillable = [
        'id', 'idTipifDelito', 'status', 'placas', 'idEstado', 'idMarca', 'idSubmarca', 'modelo', 'nrpv', 'idColor', 'permiso', 'numSerie', 'numMotor', 'idClaseVehiculo', 'idTipoVehiculo', 'idTipoUso', 'senasPartic', 'idProcedencia', 'idAseguradora',
    ];
}
