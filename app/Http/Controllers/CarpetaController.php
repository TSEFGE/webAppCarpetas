<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Carpeta;
use App\Models\CatTipoDeterminacion;

class CarpetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showRegisterForm()
    {
        $tiposdet = CatTipoDeterminacion::orderBy('id', 'ASC')->pluck('nombre', 'id');
        return view('forms.inicio')->with('tiposdet', $tiposdet);
    }

    public function storeCarpeta(Request $request){
        //dd($request->all());
        $datos = DB::table('users')
            ->join('unidad', 'unidad.id', '=', 'users.idUnidad')
            ->select('unidad.distrito','users.numFiscal', 'unidad.consecutivo')
            ->where('users.id', '=', Auth::user()->id)
            ->get();
        $num = $datos[0]->consecutivo+1;
        $carpeta = new Carpeta();
        $carpeta->idUnidad = Auth::user()->idUnidad;
        $carpeta->idFiscal = Auth::user()->id;
        $carpeta->numCarpeta = "UIPJ/D".$datos[0]->distrito."/".$datos[0]->numFiscal."/".$num."/2017";
        $carpeta->fechaInicio = $request->fechaInicio;
        if (isset($request->conDetenido)) {
            $carpeta->conDetenido = $request->conDetenido;
        }
        if (isset($request->esRelevante)) {
            $carpeta->esRelevante = $request->esRelevante;
        }
        $carpeta->estadoCarpeta = "INICIO";
        $carpeta->horaIntervencion = $request->horaIntervencion;
        $carpeta->descripcionHechos = $request->descripcionHechos;
        if (!is_null($request->npd)){
            $carpeta->npd = $request->npd;
        }
        if (!is_null($request->numIph)){
            $carpeta->numIph = $request->numIph;
        }
        $carpeta->fechaIph = $request->fechaIph;
        if (!is_null($request->narracionIph)){
            $carpeta->narracionIph = $request->narracionIph;
        }
        $carpeta->fechaDeterminacion = $request->fechaDeterminacion;
        //dd($carpeta);
        $carpeta->save();
        $idCarpeta = $carpeta->id;
        //dd($idCarpeta);
        DB::table('unidad')->where('id', Auth::user()->idUnidad)->update(['consecutivo' => $num]);
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        return redirect()->route('carpeta', $idCarpeta);
    }

    public function index($id)
    {
        $carpeta = Carpeta::where('id', $id)->get();
        $denunciantes = DB::table('extra_denunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciante.id','persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.rfc', 'variables_persona.edad', 'persona.sexo', 'variables_persona.telefono')
            ->where('extra_denunciante.idCarpeta', '=', $id)
            ->get();
        $denunciados = DB::table('extra_denunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciado.id','persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.rfc', 'variables_persona.edad', 'persona.sexo', 'variables_persona.telefono')
            ->where('extra_denunciado.idCarpeta', '=', $id)
            ->get();

        $familiaresDenunciado = DB::table('familiar')
            ->join('cat_ocupacion', 'cat_ocupacion.id', '=', 'familiar.idOcupacion')
            ->join('persona', 'persona.id', '=', 'familiar.idPersona')
            ->join('variables_persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->join('extra_denunciado', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->select('familiar.nombres as familiarNombre','familiar.primerAp as familiarPrimerAp', 'familiar.segundoAp as familiarSegundoAp', 'familiar.parentesco', 'cat_ocupacion.nombre as ocupacion' , 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('extra_denunciado.idCarpeta', '=', $id);
        $familiares = DB::table('familiar')
            ->join('cat_ocupacion', 'cat_ocupacion.id', '=', 'familiar.idOcupacion')
            ->join('persona', 'persona.id', '=', 'familiar.idPersona')
            ->join('variables_persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->join('extra_denunciante', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->select('familiar.nombres as familiarNombre','familiar.primerAp as familiarPrimerAp', 'familiar.segundoAp as familiarSegundoAp', 'familiar.parentesco', 'cat_ocupacion.nombre as ocupacion' , 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('extra_denunciante.idCarpeta', '=', $id)
            ->union($familiaresDenunciado)
            ->get();

        $delitos = DB::table('tipif_delito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->join('cat_modalidad', 'cat_modalidad.id', '=', 'tipif_delito.idModalidad')
            ->select('tipif_delito.id','cat_delito.nombre as delito', 'cat_modalidad.nombre as modalidad', 'tipif_delito.fecha', 'tipif_delito.hora')
            ->where('tipif_delito.idCarpeta', '=', $id)
            ->get();
        //dd($delitos);
        return view('carpeta')->with('carpeta', $carpeta)
            ->with('denunciantes', $denunciantes)
            ->with('denunciados', $denunciados)
            ->with('familiares', $familiares)
            ->with('delitos', $delitos);
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
