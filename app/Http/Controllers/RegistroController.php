<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CatAseguradora;
use App\Models\CatClaseVehiculo;
use App\Models\CatColor;
//use App\Models\CatDelito;
use App\Models\CatEscolaridad;
use App\Models\CatEstado;
use App\Models\CatEstadoCivil;
use App\Models\CatEtnia;
use App\Models\CatLengua;
use App\Models\CatLugar;
use App\Models\CatMarca;
//use App\Models\CatModalidad;
use App\Models\CatNcionalida;
use App\Models\CatOcupacion;
use App\Models\CatProcedencia;
use App\Models\CatPuesto;
use App\Models\CatReligion;
use App\Models\CatTipoArma;
use App\Models\CatTipoDeterminacion;
use App\Models\CatTipoUso;
use App\Models\CatZona;

use App\Models\CatMunicipio;
//use App\Models\Unidad;

class RegistroController extends Controller
{
    public function showRegisterForm()
    {
        $aseguradoras = CatAseguradora::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $clasesveh = CatClaseVehiculo::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $colores = CatColor::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $escolaridades = CatEscolaridad::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $estados = CatEstado::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $estadoscivil = CatEstadoCivil::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $etnias = CatEtnia::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $lenguas = CatLengua::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $lugares = CatLugar::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $marcas = CatMarca::orderBy('id', 'ASC')->pluck('nombre', 'id');
        //$nacionalidades = CatNacionalidad::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $ocupaciones = CatOcupacion::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $procedencias = CatProcedencia::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $puestos = CatPuesto::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $religiones = CatReligion::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $tiposarma = CatTipoArma::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $tiposdet = CatTipoDeterminacion::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $tiposuso = CatTipoUso::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $zonas = CatZona::orderBy('id', 'ASC')->pluck('nombre', 'id');
        //$municipios = CatMunicipio::where('id', '<', 10)->orderBy('id', 'ASC')->pluck('nombre', 'id');
        return view('registro')->with('aseguradoras', $aseguradoras)
                                ->with('clasesveh', $clasesveh)
                                ->with('colores', $colores)
                                ->with('escolaridades', $escolaridades)
                                ->with('estados', $estados)
                                ->with('estadoscivil', $estadoscivil)
                                ->with('etnias', $etnias)
                                ->with('lebguas', $lenguas)
                                ->with('lugares', $lugares)
                                ->with('marcas', $marcas)
                                //->with('nacionalidades', $nacionalidades)
                                ->with('ocupaciones', $ocupaciones)
                                ->with('procedencias', $procedencias)
                                ->with('puestos', $puestos)
                                ->with('religiones', $religiones)
                                ->with('tiposarma', $tiposarma)
                                ->with('tiposdet', $tiposdet)
                                ->with('tiposuso', $tiposuso)
                                ->with('zonas', $zonas);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function getMunicipios(Request $request, $id){
        if($request->ajax()){
            $municipios = CatMunicipio::municipios($id);
            return response()->json($municipios);
        }
    }
}
