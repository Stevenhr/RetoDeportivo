<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Evento;
use App\organizaciones;
class controladorAdmin extends Controller{

//=====================================================================
	public function agregarEvento(Request $request){
		$evento = new Evento;
		$obtenerID = Evento::All();
		$ID = $obtenerID->count();
		$ID++;
		$evento['i_pk_id'] = $ID;
		//SE AGREGA EL NOMBRE
		$nombre = $request->input('nombre');
		$evento['vc_nombre'] = $request->input('nombre');
		//SE AGREGA LA FECHA DE INICIO
		$evento['d_fechaInicio'] = $request->input('fechaI');
		//SE AGREGA LA FECHA DEL FINAL
		$evento['d_fechaFinal'] = $request->input('fechaF');
		//IMAGEN ES SOLICITADO
        $file = $request->file('imagen');
        //SE OBTIENE EL NOMBRE ORIGINAL DEL ARCHIVO
        $nombre = $file->getClientOriginalName();
        //SE ALMACENA EL ARCHIVO EN EL DISCO
        \Storage::disk('local')->put($nombre , \File::get($file));
        //SE GUARDA LA RUTA DEL ARCHIVO - TOPE DE CARACTERES EN DB: 45 - CARACTERES USADOS EN LA RUTA: 24 - CARACTERES DISPONIBLES: 21
        $evento['vc_logo'] = "public/storage/imagenes/".$file->getClientOriginalName();
        //SE GUARDA LA INFORMACION EN LA DB
        $evento->save();
		return view('master');
	}
//========================================================================	
public function cargarOrganizaciones (){

$tablaEventos = Evento::all();
$arrayEventos = $tablaEventos->toArray();

return view('Administrador/organizaciones')->with('arrayEventos',$arrayEventos);
}

//========================================================================

public function agregarOrganizacion (Request $request){

//Recepción de datos del formulario

$nombreOrg = $request->input('nombre');
$nit = $request->input('nit');
$direccion = $request->input('direccion');
$telefono = $request->input('telefono');
$correo = $request->input('correo');

$file = $request->file('imagen');
//SE OBTIENE EL NOMBRE ORIGINAL DEL ARCHIVO
$nombre = $file->getClientOriginalName();
//SE ALMACENA EL ARCHIVO EN EL DISCO
\Storage::disk('local')->put($nombre , \File::get($file));
 //SE GUARDA LA RUTA DEL ARCHIVO - TOPE DE CARACTERES EN DB: 45 - CARACTERES USADOS EN LA RUTA: 24 - CARACTERES DISPONIBLES: 21

$vInscripcion = $request->input('vInscripcion');

$nombreEvtSelect = $request->input('nombreEvtSelect');



//========================================================================
//INSERTANDO DATOS A LA BD
$newOrganizacion = new organizaciones;
$idOrg = $newOrganizacion->count()+1;

$modeloEvento = Evento::all();
$eventoId = $modeloEvento->where('vc_nombre',$nombreEvtSelect);
foreach ($eventoId as $key => $value) {
	$eventoId=$value['i_pk_id'];
}

$newOrganizacion->i_pk_id= $idOrg;
$newOrganizacion->vc_nombre = $nombreOrg;
$newOrganizacion->i_nit = $nit;
$newOrganizacion->vc_direccion = $direccion;
$newOrganizacion->i_telefono = $telefono;
$newOrganizacion->vc_correo = $correo;
$newOrganizacion->vc_logo = "public/storage/imagenes/".$file->getClientOriginalName(); 
$newOrganizacion->i_valorInscripcion = $vInscripcion;
$newOrganizacion->tbl_eventos_i_fk_id= $eventoId;
$newOrganizacion->save();

return view('master');
}


//========================================================================


}//Fin del controlador
