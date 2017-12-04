<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Familiar;
use App\Models\CatOcupacion;

class FamiliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idCarpeta)
    {
        $ocupaciones = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $denunciantes = DB::table('extra_denunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('persona.id','persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('extra_denunciante.idCarpeta', '=', $idCarpeta);
        $involucrados = DB::table('extra_denunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('persona.id','persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('extra_denunciado.idCarpeta', '=', $idCarpeta)
            ->union($denunciantes)
            ->get();
        return view('forms.familiar')->with('idCarpeta', $idCarpeta)
            ->with('involucrados', $involucrados)
            ->with('ocupaciones', $ocupaciones);
    }

    public function storeFamiliar(Request $request){
        //dd($request->all());
        $familiar = new Familiar($request->all());
        $familiar->save();
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
     * @param  \App\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function show(Familiar $familiar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function edit(Familiar $familiar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familiar $familiar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familiar $familiar)
    {
        //
    }
}
