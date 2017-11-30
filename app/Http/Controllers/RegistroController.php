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
use App\Models\ExtraDenunciado;
use App\Models\ExtraAutoridad;
use App\Models\ExtraAbogado;
use App\Models\Narracion;
use App\Models\TipifDelito;
use App\Models\Vehiculo;

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

    /*-----Métodos de guardado-----*/
    public function storeCarpeta(Request $request){
        //dd($request->all());
        $carpeta = new Carpeta($request->all());
        if ($request->conDetenido==="on"){
            $carpeta->conDetenido = 1;
        }
        if ($request->esRelevante==="on"){
            $carpeta->esRelevante = 1;
        }
        $carpeta->idFiscal = Auth::user()->id;
        //dd($carpeta);
        $carpeta->save();
        //$idCarpeta = $carpeta->id;
        //dd($idCarpeta);
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        //return route('registro')->with('idCarpeta', $idCarpeta);
        return redirect()->route('registro');
    }

    public function storeDenunciante(Request $request){
        //dd($request->all());
        //$user = User::create(['name'=>'Cesar','email'=>'codigojava@gmail.com']);
        //print_r($user->id);

        $persona = new Persona();
        $persona->nombres = $request->nombres;
        $persona->primerAp = $request->primerAp;
        $persona->segundoAp = $request->segundoAp;
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
        $persona->save();
        $idPersona = $persona->id;

        $domicilio = new Domicilio();
        $domicilio->idEstado = $request->idEstado;
        $domicilio->idMunicipio = $request->idMunicipio;
        $domicilio->idLocalidad = $request->idLocalidad;
        $domicilio->idColonia = $request->idColonia;
        $domicilio->calle = $request->calle;
        $domicilio->numExterno = $request->numExterno;
        $domicilio->numInterno = $request->numInterno;
        $domicilio->save();
        $idD1 = $domicilio->id;

        $domicilio2 = new Domicilio();
        $domicilio2->idEstado = $request->idEstado2;
        $domicilio2->idMunicipio = $request->idMunicipio2;
        $domicilio2->idLocalidad = $request->idLocalidad2;
        $domicilio2->idColonia = $request->idColonia2;
        $domicilio2->calle = $request->calle2;
        $domicilio2->numExterno = $request->numExterno2;
        $domicilio2->numInterno = $request->numInterno2;
        $domicilio2->save();
        $idD2 = $domicilio2->id;

        $domicilio3 = new Domicilio();
        $domicilio3->idEstado = $request->idEstado3;
        $domicilio3->idMunicipio = $request->idMunicipio3;
        $domicilio3->idLocalidad = $request->idLocalidad3;
        $domicilio3->idColonia = $request->idColonia3;
        $domicilio3->calle = $request->calle3;
        $domicilio3->numExterno = $request->numExterno3;
        $domicilio3->numInterno = $request->numInterno3;
        $domicilio3->save();
        $idD3 = $domicilio3->id;

        $notificacion = new Notificacion();
        $notificacion->idDomicilio = $idD3;
        $notificacion->correo = $request->correo;
        $notificacion->telefono = $request->telefono;
        $notificacion->fax = $request->fax;
        $notificacion->save();
        $idNotificacion = $notificacion->id;

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
        if ($request->esEmpresa==="on"){
            $VariablesPersona->representanteLegal = $request->representanteLegal;
        }else{
            $VariablesPersona->representanteLegal = "NO APLICA";
        }
        $VariablesPersona->save();
        $idVariablesPersona = $VariablesPersona->id;

        $idAbogado=null;
        $ExtraDenunciante = new ExtraDenunciante();
        $ExtraDenunciante->idVariablesPersona = $idVariablesPersona;
        $ExtraDenunciante->idNotificacion = $idNotificacion;
        $ExtraDenunciante->idAbogado = $idAbogado;
        if ($request->conoceAlDenunciado==="on"){
            $ExtraDenunciante->conoceAlDenunciado = 1;
        }
        $ExtraDenunciante->save();
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        return redirect()->route('registro');
    }

    public function storeDenunciado(Request $request){
        //dd($request->all());
        $persona = new Persona();
        $persona->nombres = $request->nombres;
        $persona->primerAp = $request->primerAp;
        $persona->segundoAp = $request->segundoAp;
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
        $persona->save();
        $idPersona = $persona->id;

        $domicilio = new Domicilio();
        $domicilio->idEstado = $request->idEstado;
        $domicilio->idMunicipio = $request->idMunicipio;
        $domicilio->idLocalidad = $request->idLocalidad;
        $domicilio->idColonia = $request->idColonia;
        $domicilio->calle = $request->calle;
        $domicilio->numExterno = $request->numExterno;
        $domicilio->numInterno = $request->numInterno;
        $domicilio->save();
        $idD1 = $domicilio->id;

        $domicilio2 = new Domicilio();
        $domicilio2->idEstado = $request->idEstado2;
        $domicilio2->idMunicipio = $request->idMunicipio2;
        $domicilio2->idLocalidad = $request->idLocalidad2;
        $domicilio2->idColonia = $request->idColonia2;
        $domicilio2->calle = $request->calle2;
        $domicilio2->numExterno = $request->numExterno2;
        $domicilio2->numInterno = $request->numInterno2;
        $domicilio2->save();
        $idD2 = $domicilio2->id;

        $domicilio3 = new Domicilio();
        $domicilio3->idEstado = $request->idEstado3;
        $domicilio3->idMunicipio = $request->idMunicipio3;
        $domicilio3->idLocalidad = $request->idLocalidad3;
        $domicilio3->idColonia = $request->idColonia3;
        $domicilio3->calle = $request->calle3;
        $domicilio3->numExterno = $request->numExterno3;
        $domicilio3->numInterno = $request->numInterno3;
        $domicilio3->save();
        $idD3 = $domicilio3->id;

        $notificacion = new Notificacion();
        $notificacion->idDomicilio = $idD3;
        $notificacion->correo = $request->correo;
        $notificacion->telefono = $request->telefono;
        $notificacion->fax = $request->fax;
        $notificacion->save();
        $idNotificacion = $notificacion->id;

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
        if ($request->esEmpresa==="on"){
            $VariablesPersona->representanteLegal = $request->representanteLegal;
        }else{
            $VariablesPersona->representanteLegal = "NO APLICA";
        }
        $VariablesPersona->save();
        $idVariablesPersona = $VariablesPersona->id;

        $idAbogado=null;
        $ExtraDenunciado = new ExtraDenunciado();
        $ExtraDenunciado->idVariablesPersona = $idVariablesPersona;
        $ExtraDenunciado->idNotificacion = $idNotificacion;
        $ExtraDenunciado->idPuesto = $request->idPuesto;
        $ExtraDenunciado->alias = $request->alias;
        $ExtraDenunciado->senasPartic = $request->senasPartic;
        $ExtraDenunciado->ingreso = $request->ingreso;
        $ExtraDenunciado->periodoIngreso = $request->periodoIngreso;
        $ExtraDenunciado->residenciaAnterior = $request->residenciaAnterior;
        $ExtraDenunciado->idAbogado = $idAbogado;
        $ExtraDenunciado->personasBajoSuGuarda = $request->personasBajoSuGuarda;
        if ($request->esperseguidoPenalmente==="on"){
            $ExtraDenunciado->perseguidoPenalmente = 1;
        }
        $ExtraDenunciado->vestimenta = $request->vestimenta;
        $ExtraDenunciado->save();
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        return redirect()->route('registro');
    }

    public function storeAutoridad(Request $request){
        //dd($request->all());
        $carpeta = Carpeta::where('idFiscal', Auth::user()->id)->where('idUnidad', Auth::user()->idUnidad)->orderBy('id','DESC')->take(1)->pluck('id');
        $idCarpeta = $carpeta[0];
        //dd($idCarpeta);
        $persona = new Persona();
        $persona->nombres = $request->nombres;
        $persona->primerAp = $request->primerAp;
        $persona->segundoAp = $request->segundoAp;
        $persona->fechaNacimiento = $request->fechaNacimiento;
        $persona->rfc = $request->rfc;
        $persona->curp = $request->curp;
        $persona->sexo = $request->sexo;
        $persona->idNacionalidad = $request->idNacionalidad;
        $persona->idEtnia = $request->idEtnia;
        $persona->idLengua = $request->idLengua;
        $persona->idEstadoOrigen = $request->idEstadoOrigen;
        $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
        $persona->esEmpresa = 0;
        $persona->save();
        $idPersona = $persona->id;

        $domicilio = new Domicilio();
        $domicilio->idEstado = $request->idEstado;
        $domicilio->idMunicipio = $request->idMunicipio;
        $domicilio->idLocalidad = $request->idLocalidad;
        $domicilio->idColonia = $request->idColonia;
        $domicilio->calle = $request->calle;
        $domicilio->numExterno = $request->numExterno;
        $domicilio->numInterno = $request->numInterno;
        $domicilio->save();
        $idD1 = $domicilio->id;

        $domicilio2 = new Domicilio();
        $domicilio2->idEstado = $request->idEstado2;
        $domicilio2->idMunicipio = $request->idMunicipio2;
        $domicilio2->idLocalidad = $request->idLocalidad2;
        $domicilio2->idColonia = $request->idColonia2;
        $domicilio2->calle = $request->calle2;
        $domicilio2->numExterno = $request->numExterno2;
        $domicilio2->numInterno = $request->numInterno2;
        $domicilio2->save();
        $idD2 = $domicilio2->id;

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
        $VariablesPersona->representanteLegal = "NO APLICA";
        $VariablesPersona->save();
        $idVariablesPersona = $VariablesPersona->id;


        $ExtraAutoridad = new ExtraAutoridad();
        $ExtraAutoridad->idCarpeta = $idCarpeta;
        $ExtraAutoridad->idVariablesPersona = $idVariablesPersona;
        $ExtraAutoridad->antiguedad = $request->antiguedad;
        $ExtraAutoridad->rango = $request->rango;
        $ExtraAutoridad->horarioLaboral = $request->horarioLaboral;
        $ExtraAutoridad->save();
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        return redirect()->route('registro');
    }

    public function storeAbogado(Request $request){
        //dd($request->all());
        $persona = new Persona();
        $persona->nombres = $request->nombres;
        $persona->primerAp = $request->primerAp;
        $persona->segundoAp = $request->segundoAp;
        $persona->fechaNacimiento = $request->fechaNacimiento;
        $persona->rfc = $request->rfc;
        $persona->sexo = $request->sexo;
        $persona->idNacionalidad = 1;
        $persona->idEstadoOrigen = $request->idEstadoOrigen;
        $persona->idMunicipioOrigen = $request->idMunicipioOrigen;

        $persona->curp = "SIN INFORMACION";
        $persona->idEtnia = 13;
        $persona->idLengua = 69;
        $persona->esEmpresa = 0;
        $persona->save();
        $idPersona = $persona->id;

        $domicilio2 = new Domicilio();
        $domicilio2->idEstado = $request->idEstado2;
        $domicilio2->idMunicipio = $request->idMunicipio2;
        $domicilio2->idLocalidad = $request->idLocalidad2;
        $domicilio2->idColonia = $request->idColonia2;
        $domicilio2->calle = $request->calle2;
        $domicilio2->numExterno = $request->numExterno2;
        $domicilio2->numInterno = $request->numInterno2;
        $domicilio2->save();
        $idD2 = $domicilio2->id;

        $VariablesPersona = new VariablesPersona();
        $VariablesPersona->idPersona = $idPersona;
        $VariablesPersona->telefono = $request->telefono;
        $VariablesPersona->idEstadoCivil = $request->idEstadoCivil;
        $VariablesPersona->lugarTrabajo = $request->lugarTrabajo;
        $VariablesPersona->idDomicilioTrabajo = $idD2;
        $VariablesPersona->telefonoTrabajo = $request->telefonoTrabajo;

        $VariablesPersona->edad = 20;//SE DEBE CALCULAR
        $VariablesPersona->motivoEstancia = "NO APLICA";
        $VariablesPersona->idOcupacion = 2469;
        $VariablesPersona->idEscolaridad = 8;
        $VariablesPersona->idReligion = 29;
        $VariablesPersona->idDomicilio = null;
        $VariablesPersona->docIdentificacion = "NO APLICA";
        $VariablesPersona->numDocIdentificacion = "NO APLICA";
        $VariablesPersona->representanteLegal = "NO APLICA";
        $VariablesPersona->save();
        $idVariablesPersona = $VariablesPersona->id;

        $ExtraAbogado = new ExtraAbogado();
        $ExtraAbogado->idVariablesPersona = $idVariablesPersona;
        $ExtraAbogado->cedulaProf = $request->cedulaProf;
        $ExtraAbogado->sector = $request->sector;
        $ExtraAbogado->correo = $request->correo;
        $ExtraAbogado->save();
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        return redirect()->route('registro');
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
        return redirect()->route('registro');
    }

    public function storeNarracion(Request $request){
        //dd($request->all());
        $narracion = new Narracion($request->all());
        $narracion->save();
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        return redirect()->route('registro');
    }

    public function storeDelito(Request $request){
        //dd($request->all());
        $carpeta = Carpeta::where('idFiscal', Auth::user()->id)->where('idUnidad', Auth::user()->idUnidad)->orderBy('id','DESC')->take(1)->pluck('id');
        $idCarpeta = $carpeta[0];
        //dd($idCarpeta);
        $domicilio = new Domicilio();
        $domicilio->idEstado = $request->idEstado;
        $domicilio->idMunicipio = $request->idMunicipio;
        $domicilio->idLocalidad = $request->idLocalidad;
        $domicilio->idColonia = $request->idColonia;
        $domicilio->calle = $request->calle;
        $domicilio->numExterno = $request->numExterno;
        $domicilio->numInterno = $request->numInterno;
        $domicilio->save();
        $idD1 = $domicilio->id;

        $tipifDelito = new TipifDelito();
        $tipifDelito->idCarpeta = $idCarpeta;
        $tipifDelito->idDelito = $request->idDelito;
        if ($request->conViolencia==="on"){
            $tipifDelito->conViolencia = 1;
        }
        $tipifDelito->idTipoArma = $request->idTipoArma;
        $tipifDelito->idArma = $request->idArma;
        $tipifDelito->idPosibleCausa = 0;
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
        return redirect()->route('registro');
    }

    public function storeVehiculo(Request $request){
        //dd($request->all());
        //$tipifDelito = TipifDelito::where('idFiscal', Auth::user()->id)->where('idUnidad', Auth::user()->idUnidad)->orderBy('id','DESC')->take(1)->pluck('id');
        //$idTipifDelito = $tipifDelito[0];
        $idTipifDelito = 1;
        //dd($idCarpeta);
        $idTipifDelito = 1;
        $vehiculo = new Vehiculo();
        $vehiculo->idTipifDelito = $idTipifDelito;
        $vehiculo->status = $request->status;
        $vehiculo->placas = $request->placas;
        $vehiculo->idEstado = $request->idEstado;
        $vehiculo->idMarca = $request->idMarca;
        $vehiculo->idSubmarca = $request->idSubmarca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->nrpv = $request->nrpv;
        $vehiculo->idColor = $request->idColor;
        $vehiculo->permiso = $request->permiso;
        $vehiculo->numSerie = $request->numSerie;
        $vehiculo->numMotor = $request->numMotor;
        $vehiculo->idClaseVehiculo = $request->idClaseVehiculo;
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
        return redirect()->route('registro');
    }

    /*-----Métodos para obetener catálogos-----*/
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
