<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Acusacion;

class AcusacionController extends Controller
{
    public function showForm($idCarpeta)
    {
        $denunciantes = DB::table('extra_denunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciante.id','persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)
            ->get();
        $denunciados = DB::table('extra_denunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciado.id','persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)
            ->get();
        $tipifdelitos = DB::table('tipif_delito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->select('tipif_delito.id','cat_delito.nombre')
            ->where('tipif_delito.idCarpeta', '=', $idCarpeta)
            ->get();
        return view('forms.acusacion')->with('idCarpeta', $idCarpeta)
            ->with('denunciantes', $denunciantes)
            ->with('denunciados', $denunciados)
            ->with('tipifdelitos', $tipifdelitos);
    }

    public function storeAcusacion(Request $request){
        //dd($request->all());
        $acusacion = new Acusacion();
        $acusacion->idCarpeta = $request->idCarpeta;
        $acusacion->idDenunciante = $request->idDenunciante;
        $acusacion->idTipifDelito = $request->idTipifDelito;
        $acusacion->idDenunciado = $request->idDenunciado;
        $acusacion->save();
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        Alert::success('Acusación registrado con éxito', 'Hecho')->persistent("Aceptar");
        return redirect()->route('carpeta', $request->idCarpeta);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
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
}
