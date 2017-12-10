<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

class DocxMakerController extends Controller
{
	public function __construct(){
        Carbon::setLocale('es');
    }

    public function getConstanciaHechos($idCarpeta)
	{
		$info = DB::table('carpeta')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->join('users', 'users.id', '=', 'carpeta.idFiscal')
            ->select('carpeta.id', 'carpeta.numCarpeta', 'carpeta.fechaInicio', 'carpeta.descripcionHechos', 'unidad.direccion', 'unidad.telefono', 'unidad.distrito', 'users.nombres', 'users.primerAp', 'users.segundoAp', 'users.numFiscal')
            ->where('carpeta.id', '=', $idCarpeta)
            ->get();
        $info=$info[0];

		$fechaInicio = new Carbon($info->fechaInicio);
        $distritoLetra = DocxMakerController::getDistritoLetra($info->distrito);
		$fechaHoy = new Carbon();
		$mesLetra = DocxMakerController::getMesLetra($fechaHoy->month);
		$fechaCompleta = strtoupper($fechaHoy->day." DE ".$mesLetra." DE ".$fechaHoy->year);
		$nombreFiscal = strtoupper($info->nombres." ".$info->primerAp." ".$info->segundoAp);
		$diaLetra = strtolower(DocxMakerController::getDiaLetra($fechaHoy->day));
		$mesLetra = strtolower($mesLetra);
		
		$municipioUnidad = "Xalapa";
		$municipioUnidadM = strtoupper($municipioUnidad);
		$nombreDenunciante = strtoupper("Romulo Romagnoli");


		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('templates/ConstanciaDeHechos.docx');
		$templateProcessor->setValue('distrito', $info->distrito);
		$templateProcessor->setValue('distritoLetra', $distritoLetra);
		$templateProcessor->setValue('numFiscal', $info->numFiscal);
		$templateProcessor->setValue('numOficio', 0);
		$templateProcessor->setValue('anio', $fechaHoy->year);
		$templateProcessor->setValue('numCarpeta', $info->numCarpeta);
		$templateProcessor->setValue('anioCarpeta', $fechaInicio->year);
		$templateProcessor->setValue('municipioUnidad', $municipioUnidad);
		$templateProcessor->setValue('municipioUnidadM', $municipioUnidadM);
		$templateProcessor->setValue('fechaCompleta', $fechaCompleta);
		$templateProcessor->setValue('nombreFiscal', $nombreFiscal);
		$templateProcessor->setValue('diaInicio', $fechaInicio->day);
		$templateProcessor->setValue('mesInicio', $mesLetra);
		$templateProcessor->setValue('anioInicio', $fechaInicio->year);
		$templateProcessor->setValue('nombreDenunciante', $nombreDenunciante);
		$templateProcessor->setValue('narracion', $info->descripcionHechos);
		$templateProcessor->setValue('diaLetra', $diaLetra);
		$templateProcessor->setValue('mesLetra', $mesLetra);
		$templateProcessor->setValue('direccion', $info->direccion);
		$templateProcessor->setValue('telefono', $info->telefono);

		
		$templateProcessor->saveAs('../storage/oficios/ConstanciaDeHechos'.$info->id.'.docx');
		return response()->download('../storage/oficios/ConstanciaDeHechos'.$info->id.'.docx');

	}

	public static function getDistritoLetra($numDistrito){
		switch ($numDistrito) {
        	case 'I':
        		$distritoLetra = "PRIMER";
        		break;
        	case 'II':
        		$distritoLetra = "SEGUNDO";
        		break;
        	case 'III':
        		$distritoLetra = "TERCER";
        		break;
        	case 'IV':
        		$distritoLetra = "CUARTO";
        		break;
        	case 'V':
        		$distritoLetra = "QUINTO";
        		break;
        	case 'VI':
        		$distritoLetra = "SEXTO";
        		break;
        	case 'VII':
        		$distritoLetra = "SEPTIMO";
        		break;
        	case 'VIII':
        		$distritoLetra = "OCTAVO";
        		break;
        	case 'IX':
        		$distritoLetra = "NOVENO";
        		break;
        	case 'X':
        		$distritoLetra = "DECIMO";
        		break;
        	case 'XI':
        		$distritoLetra = "DECIMOPRIMER";
        		break;
        	case 'XII':
        		$distritoLetra = "DECIMOSEGUNDO";
        		break;
        	default:
        		$distritoLetra = "PRIMER";
        		break;
        }
        return $distritoLetra;
	}

	public static function getMesLetra($numMes){
		switch ($numMes) {
        	case '1':
        		$mesLetra = "Enero";
        		break;
        	case '2':
        		$mesLetra = "Febrero";
        		break;
        	case '3':
        		$mesLetra = "Marzo";
        		break;
        	case '4':
        		$mesLetra = "Abril";
        		break;
        	case '5':
        		$mesLetra = "Mayo";
        		break;
        	case '6':
        		$mesLetra = "Junio";
        		break;
        	case '7':
        		$mesLetra = "Julio";
        		break;
        	case '8':
        		$mesLetra = "Agosto";
        		break;
        	case '9':
        		$mesLetra = "Septiembre";
        		break;
        	case '10':
        		$mesLetra = "Octubre";
        		break;
        	case '11':
        		$mesLetra = "Noviembre";
        		break;
        	case '12':
        		$mesLetra = "Diciembre";
        		break;
        	default:
        		$mesLetra = "ENERO";
        		break;
        }
        return $mesLetra;
	}

	public static function getDiaLetra($numDia){
		switch ($numDia) {
        	case '1':
        		$diaLetra = "Primero";
        		break;
        	case '1':
        		$diaLetra = "Dos";
        		break;
        	case '3':
        		$diaLetra = "Tres";
        		break;
        	case '4':
        		$diaLetra = "Cuatro";
        		break;
        	case '5':
        		$diaLetra = "Cinco";
        		break;
        	case '6':
        		$diaLetra = "Seis";
        		break;
        	case '7':
        		$diaLetra = "Siete";
        		break;
        	case '8':
        		$diaLetra = "Ocho";
        		break;
        	case '9':
        		$diaLetra = "Nueve";
        		break;
        	case '10':
        		$diaLetra = "Diez";
        		break;
        	case '11':
        		$diaLetra = "Once";
        		break;
        	case '12':
        		$diaLetra = "Doce";
        		break;
        	case '13':
        		$diaLetra = "Trece";
        		break;
        	case '14':
        		$diaLetra = "Catorce";
        		break;
        	case '15':
        		$diaLetra = "Quince";
        		break;
        	case '16':
        		$diaLetra = "Dieciseis";
        		break;
        	case '17':
        		$diaLetra = "Diecisiete";
        		break;
        	case '18':
        		$diaLetra = "Dieciocho";
        		break;
        	case '19':
        		$diaLetra = "Diecinueve";
        		break;
        	case '20':
        		$diaLetra = "Veinte";
        		break;
        	case '21':
        		$diaLetra = "Veintiuno";
        		break;
        	case '22':
        		$diaLetra = "Veintidos";
        		break;
        	case '23':
        		$diaLetra = "Veintitres";
        		break;
        	case '24':
        		$diaLetra = "Veinticuatro";
        		break;
        	case '25':
        		$diaLetra = "Veinticinco";
        		break;
        	case '26':
        		$diaLetra = "Veintiseis";
        		break;
        	case '27':
        		$diaLetra = "Veintisiete";
        		break;
        	case '28':
        		$diaLetra = "Veintiocho";
        		break;
        	case '29':
        		$diaLetra = "Veintinueve";
        		break;
        	case '30':
        		$diaLetra = "Treinta";
        		break;
        	case '31':
        		$diaLetra = "Treinta y un";
        		break;
        	
        	default:
        		$diaLetra = "Primero";
        		break;
        }
        return $diaLetra;
	}

	
}
