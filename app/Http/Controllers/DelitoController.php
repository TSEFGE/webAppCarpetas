<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CatDelito;
use App\Models\CatEstado;
use App\Models\CatLugar;
use App\Models\CatMarca;
use App\Models\CatModalidad;
use App\Models\CatTipoArma;
use App\Models\CatZona;

use App\Models\Domicilio;
use App\Models\TipifDelito;

class DelitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idCarpeta)
    {
        $delitos = CatDelito::select('id', 'nombre')->orderBy('id', 'ASC')->pluck('nombre', 'id');
        $estados = CatEstado::select('id', 'nombre')->orderBy('id', 'ASC')->pluck('nombre', 'id');
        $lugares = CatLugar::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $marcas = CatMarca::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $modalidades = CatModalidad::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $tiposarma = CatTipoArma::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $zonas = CatZona::orderBy('id', 'ASC')->pluck('nombre', 'id');
        return view('forms.delito')->with('idCarpeta', $idCarpeta)
            ->with('delitos', $delitos)
            ->with('estados', $estados)
            ->with('lugares', $lugares)
            ->with('marcas', $marcas)
            ->with('modalidades', $modalidades)
            ->with('tiposarma', $tiposarma)
            ->with('zonas', $zonas);
    }

    public function storeDelito(Request $request){
        //dd($request->all());
        $domicilio = new Domicilio();
        $domicilio->idMunicipio = $request->idMunicipio;
        $domicilio->idLocalidad = $request->idLocalidad;
        $domicilio->idColonia = $request->idColonia;
        $domicilio->calle = $request->calle;
        $domicilio->numExterno = $request->numExterno;
        $domicilio->numInterno = $request->numInterno;
        $domicilio->save();
        $idD1 = $domicilio->id;

        $tipifDelito = new TipifDelito();
        $tipifDelito->idCarpeta = $request->idCarpeta;
        $tipifDelito->idDelito = $request->idDelito;
        if ($request->conViolencia==="1"){
            $tipifDelito->conViolencia = 1;
        }
        $tipifDelito->idArma = $request->idArma;
        $tipifDelito->idPosibleCausa = null;
        $tipifDelito->idModalidad = $request->idModalidad;
        $tipifDelito->formaComision = $request->formaComision;
        $tipifDelito->consumacion = $request->consumacion;
        $tipifDelito->fecha = $request->fecha;
        $tipifDelito->hora = $request->hora;
        $tipifDelito->idLugar = $request->idLugar;
        $tipifDelito->idZona = $request->idZona;
        $tipifDelito->idDomicilio = $idD1;
        $tipifDelito->entreCalle = $request->entreCalle;
        $tipifDelito->yCalle = $request->yCalle;
        $tipifDelito->calleTrasera = $request->calleTrasera;
        $tipifDelito->puntoReferencia = $request->puntoReferencia;
        $tipifDelito->save();
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
