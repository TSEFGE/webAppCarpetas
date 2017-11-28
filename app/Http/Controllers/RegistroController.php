<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\CatAseguradora;
use App\Models\CatClaseVehiculo;
use App\Models\CatColor;
use App\Models\CatDelito;
use App\Models\CatEscolaridad;
use App\Models\CatEstado;
use App\Models\CatEstadoCivil;
use App\Models\CatEtnia;
use App\Models\CatLengua;
use App\Models\CatLugar;
use App\Models\CatMarca;
use App\Models\CatModalidad;
use App\Models\CatNacionalidad;
use App\Models\CatOcupacion;
use App\Models\CatProcedencia;
use App\Models\CatPuesto;
use App\Models\CatReligion;
use App\Models\CatTipoArma;
use App\Models\CatTipoDeterminacion;
use App\Models\CatTipoUso;
use App\Models\CatZona;

use App\Models\CatMunicipio;
use App\Models\CatLocalidad;
use App\Models\CatColonia;
use App\Models\CatSubmarca;
use App\Models\CatTipoVehiculo;
//use App\Models\Unidad;

use App\Models\Carpeta;
use App\Models\Persona;
use App\Models\Domicilio;
use App\Models\VariablesPersona;
use App\Models\Notificacion;
use App\Models\ExtraDenunciante;

class RegistroController extends Controller
{
    public function showRegisterForm()
    {
        $aseguradoras = CatAseguradora::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $clasesveh = CatClaseVehiculo::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $colores = CatColor::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $delitos = CatDelito::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $escolaridades = CatEscolaridad::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $estados = CatEstado::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $estadoscivil = CatEstadoCivil::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $etnias = CatEtnia::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $lenguas = CatLengua::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $lugares = CatLugar::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $marcas = CatMarca::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $modalidades = CatModalidad::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $nacionalidades = CatNacionalidad::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $ocupaciones = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
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
                                ->with('delitos', $delitos)
                                ->with('escolaridades', $escolaridades)
                                ->with('estados', $estados)
                                ->with('estadoscivil', $estadoscivil)
                                ->with('etnias', $etnias)
                                ->with('lenguas', $lenguas)
                                ->with('lugares', $lugares)
                                ->with('marcas', $marcas)
                                ->with('modalidades', $modalidades)
                                ->with('nacionalidades', $nacionalidades)
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
        //dd($request->all());
        $carpeta = new Carpeta($request->all());
        if ($request->conDetenido==="on"){
            $carpeta->conDetenido = 1;
        }
        if ($request->esRelevante==="on"){
            $carpeta->esRelevante = 1;
        }
        $carpeta->idFiscal = Auth::user()->id;
        $carpeta->save();
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        return redirect()->route('registro');
    }

    public function storeDenunciante(Request $request){
        dd($request->all());

        $persona = new Persona();
        $persona->nombres = $request->nombres;
        $persona->primerAp = $request->primerAp;
        $persona->segundoAP = $request->segundoAP;
        $persona->fechaNacimiento = $request->fechaNacimiento;
        $persona->rfc = $request->rfc;
        $persona->curp = $request->curp;
        $persona->sexo = $request->sexo;
        $persona->idNacionalidad = $request->idNacionalidad;
        $persona->idEtnia = $request->idEtnia;
        $persona->idLengua = $request->idLengua;
        $persona->idEstadoOrigen = $request->idEstadoOrigen;
        $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
        if ($request->esEmpresa==="on"){
            $persona->esEmpresa = 1;
        }

        $domicilio = new Domicilio();
        $domicilio->idEstado = $request->idEstado;
        $domicilio->idMunicipio = $request->idMunicipio;
        $domicilio->idLocalidad = $request->idLocalidad;
        $domicilio->idColonia = $request->idColonia;
        $domicilio->calle = $request->calle;
        $domicilio->numExterno = $request->numExterno;
        $domicilio->numInterno = $request->numInterno;

        $domicilio2 = new Domicilio();
        $domicilio2->idEstado = $request->idEstado2;
        $domicilio2->idMunicipio = $request->idMunicipio2;
        $domicilio2->idLocalidad = $request->idLocalidad2;
        $domicilio2->idColonia = $request->idColonia2;
        $domicilio2->calle = $request->calle2;
        $domicilio2->numExterno = $request->numExterno2;
        $domicilio2->numInterno = $request->numInterno2;

        $domicilio3 = new Domicilio();
        $domicilio3->idEstado = $request->idEstado3;
        $domicilio3->idMunicipio = $request->idMunicipio3;
        $domicilio3->idLocalidad = $request->idLocalidad3;
        $domicilio3->idColonia = $request->idColonia3;
        $domicilio3->calle = $request->calle3;
        $domicilio3->numExterno = $request->numExterno3;
        $domicilio3->numInterno = $request->numInterno3;

        $notificacion = new Notificacion();
        $notificacion->idDomicilio = $idD3;
        $notificacion->correo = $request->correo;
        $notificacion->telefono = $request->telefono;
        $notificacion->fax = $request->fax;

        $VariablesPersona = new VariablesPersona();
        $VariablesPersona->idPersona = $idPersona;
        $VariablesPersona->edad = $request->edad;
        $VariablesPersona->telefono = $request->telefono;
        $VariablesPersona->motivoEstancia = $request->motivoEstancia;
        $VariablesPersona->idOcupacion = $request->idOcupacion;
        $VariablesPersona->idEstadoCivil = $request->idEstadoCivil;
        $VariablesPersona->idEscolaridad = $request->idEscolaridad;
        $VariablesPersona->idReligion = $request->idReligion;
        $VariablesPersona->idDomicilio = $idD1;
        $VariablesPersona->docIdentificacion = $request->docIdentificacion;
        $VariablesPersona->numDocIdentificacion = $request->numDocIdentificacion;
        $VariablesPersona->lugarTrabajo = $request->lugarTrabajo;
        $VariablesPersona->idDomicilioTrabajo = $idD2;
        $VariablesPersona->telefonoTrabajo = $request->telefonoTrabajo;
        $VariablesPersona->representanteLegal = $request->representanteLegal;

        $ExtraDenunciante = new ExtraDenunciante();
        $ExtraDenunciante->idVariablesPersona = $idVariablesPersona;
        $ExtraDenunciante->idNotificacion = $idNotificacion;
        $ExtraDenunciante->idAbogado = $idAbogado;
        if ($request->conoceAlDenunciado==="on"){
            $ExtraDenunciante->conoceAlDenunciado = 1;
        }
        
        $carpeta->save();
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        return redirect()->route('registro');
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

	public function getLocalidades(Request $request, $id){
        if($request->ajax()){
            $localidades = CatLocalidad::localidades($id);
            return response()->json($localidades);
        }
    }

    public function getCodigos(Request $request, $id){
        if($request->ajax()){
            $codigos = CatColonia::codigos($id);
            return response()->json($codigos);
        }
    }

    public function getColonias(Request $request, $cp){
        if($request->ajax()){
            $colonias = CatColonia::colonias($cp);
            return response()->json($colonias);
        }
    }

    public function getSubmarcas(Request $request, $id){
        if($request->ajax()){
            $submarcas = CatSubmarca::submarcas($id);
            return response()->json($submarcas);
        }
    }

    public function getTipoVehiculos(Request $request, $id){
        if($request->ajax()){
            $tipoVehiculos = CatTipoVehiculo::tipoVehiculos($id);
            return response()->json($tipoVehiculos);
		}
	}
    
}
