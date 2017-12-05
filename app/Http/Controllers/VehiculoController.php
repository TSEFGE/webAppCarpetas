<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CatAseguradora;
use App\Models\CatClaseVehiculo;
use App\Models\CatColor;
use App\Models\CatEstado;
use App\Models\CatMarca;
use App\Models\CatProcedencia;
use App\Models\CatTipoUso;

use App\Models\TipifDelito;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idCarpeta)
    {
        $aseguradoras = CatAseguradora::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $clasesveh = CatClaseVehiculo::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $colores = CatColor::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $estados = CatEstado::select('id', 'nombre')->orderBy('id', 'ASC')->pluck('nombre', 'id');
        $marcas = CatMarca::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $procedencias = CatProcedencia::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $tiposuso = CatTipoUso::orderBy('id', 'ASC')->pluck('nombre', 'id');
        return view('forms.vehiculo')->with('idCarpeta', $idCarpeta)
            ->with('aseguradoras', $aseguradoras)
            ->with('clasesveh', $clasesveh)
            ->with('colores', $colores)
            ->with('estados', $estados)
            ->with('marcas', $marcas)
            ->with('procedencias', $procedencias)
            ->with('tiposuso', $tiposuso);
    }

    public function storeVehiculo(Request $request){
        //dd($request->all());
        $idTipifDelito = 4;
        $vehiculo = new Vehiculo();
        $vehiculo->idTipifDelito = $idTipifDelito;
        $vehiculo->status = $request->status;
        $vehiculo->placas = $request->placas;
        $vehiculo->idEstado = $request->idEstado;
        $vehiculo->idSubmarca = $request->idSubmarca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->nrpv = $request->nrpv;
        $vehiculo->idColor = $request->idColor;
        $vehiculo->permiso = $request->permiso;
        $vehiculo->numSerie = $request->numSerie;
        $vehiculo->numMotor = $request->numMotor;
        $vehiculo->idTipoVehiculo = $request->idTipoVehiculo;
        $vehiculo->idTipoUso = $request->idTipoUso;
        $vehiculo->senasPartic = $request->senasPartic;
        $vehiculo->idProcedencia = $request->idProcedencia;
        $vehiculo->idAseguradora = $request->idAseguradora;
        $vehiculo->save();
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        return redirect()->route('carpeta', $request->idCarpeta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
