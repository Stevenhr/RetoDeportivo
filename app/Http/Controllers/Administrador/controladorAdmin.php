<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Evento;
use App\organizaciones;
use App\tbl_sexo;
use App\tbl_tipos_documentos;
use App\usuarios;
use App\tbl_acceso;
use App\tbl_modulos;
use App\tbl_actividades;

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

//=====================================================================
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

//=======================================================================
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


//=======================================================================
public function cargarPersonas (){

// clean the output buffer
ob_clean();

//Cargo los tipos de documentos disponibles
$tablaDocs = tbl_tipos_documentos::all();
$arrayDocs = $tablaDocs->toArray();

//Cargo las organizaciones disponibles
$tablaOrg = organizaciones::all();
$arrayOrg = $tablaOrg->toArray();

//Cargo los sexos disponibles
$tablaSexo = tbl_sexo::all();
$arraySexo = $tablaSexo->toArray();

return view('Administrador/personas')->with('arrayOrg',$arrayOrg)->with('arraySexo',$arraySexo)->with('arrayDocs',$arrayDocs);
}

//=======================================================================
public function agregarPersona (Request $request){

//RECEPCIÓN DE DATOS
$nombre = $request->input('nombre');
$apellido = $request->input('apellido');
$nombreTipoDoc = $request->input('nombreTipoDoc');
$cedula = $request->input('cedula');
$nombreTipoSexo = $request->input('nombreTipoSexo');
$telefono =(int) $request->input('telefono');
$celular = (int)$request->input('celular');
$correo = $request->input('correo');
$nombreOrg = $request->input('nombreOrg');

//CONSULTANDO LAS FK DE TIPO-DOC, SEXO , ORGANIZACIÓN
$modeloDoc = tbl_tipos_documentos::all();
$consultaDoc = $modeloDoc->where('vc_nombre',$nombreTipoDoc);
foreach ($consultaDoc as $key => $value) {
	$documentoId=$value['i_pk_id'];
}

$modeloSexo = tbl_sexo::all();
$consultaSexo = $modeloSexo->where('vc_sexo',$nombreTipoSexo);
foreach ($consultaSexo as $key => $value) {
	$sexoId=$value['i_pk_id'];
}

$modeloOrg = organizaciones::all();
$consultaOrg = $modeloOrg->where('vc_nombre',$nombreOrg);
foreach ($consultaOrg as $key => $value) {
	$organizacionId=$value['i_pk_id'];
}

//INSERCIÓN DE DATOS A LA DB
//===================================================================
//Inserción de datos a la tabla -> tbl_personas
$newPersona = new usuarios;
$idPersona = $newPersona->count()+1;

$newPersona->i_pk_id = $idPersona;
$newPersona->vc_cedula = $cedula;
$newPersona->vc_nombre = $nombre;
$newPersona->vc_apellido = $apellido;
$newPersona->vc_correo = $correo;
$newPersona->i_telefono = $telefono;
$newPersona->i_celular = $celular;
$newPersona->tbl_sexo_i_pk_id = $sexoId;
$newPersona->tbl_tipos_documentos_i_pk_id = $documentoId;
$newPersona->save();

//Inserción de datos a la tabla -> tbl_pivot_organizacion_persona
$newUsuario = usuarios::find($idPersona); 
$newUsuario->organizaciones()->attach($organizacionId);
//======================================================================

//SE ASIGNA USUARIO Y CONTRASEÑA PARA LA NUEVA PERSONA
$usuario=$this->generarUsuario($nombre,$apellido,$cedula);
$contrasenia=$this->generarContrasenia($apellido);

//Se insertan datos a la tabla -> tbl_acceso
$acceso = new tbl_acceso;
$acceso->tbl_personas_i_pk_id = $idPersona;
$acceso->vc_usuario = $usuario;
$acceso->vc_contrasena= $contrasenia;
$acceso->save();

//PENDIENTE
//Retornar en una vista el usuario y contraseña generado
return view('personas');

}//Fin de la función agregar persona
//=======================================================================

//=======================================================================
public function generarUsuario($nombre,$apellido,$cedula){

$nombre = strtolower($nombre);
$apellido = strtolower($apellido);

$usuario=str_pad($nombre,16, $cedula, STR_PAD_RIGHT );

return $usuario;

}

public function generarContrasenia($apellido){

$apellido = strtolower($apellido);
$numRandom= rand(11111,66666);
$contrasenia=str_pad($apellido,12, $numRandom, STR_PAD_RIGHT );

return $contrasenia;
}
//=======================================================================
public function cargarActividades (){

$tablaModulos = tbl_modulos::all();
$arrayModulos = $tablaModulos->toArray();

return view('Administrador/actividades')->with('arrayModulos',$arrayModulos);
}

//====================================================================

public function agregarActividad (Request $request){

//RECEPCIÓN DE DATOS
$nombModulo = $request->input('nombModulo');	
$nombre = $request->input('nombre');
$descripcion = $request->input('descripcion');
$estado = $request->input('estado');


//Adecuación de los datos

$modulo = tbl_modulos::where('vc_nombre',$nombModulo)->get();
$modulo= $modulo->toArray();

$newActividad = new tbl_actividades;
$idActividad = $newActividad->count()+1;

if ($estado=="Habilitada") {
	$estadoActividad=1;
}else{
	$estadoActividad=0;
}

//INSERCIÓN DE DATOS A LA TABLA: tbl_actividades
$newActividad->i_pk_id = $idActividad;
$newActividad->vc_nombre = $nombre;
$newActividad->vc_descripcion = $descripcion;
$newActividad->i_estado = $estadoActividad;
$newActividad->tbl_modulos_i_fk_id = $modulo[0]['i_pk_id'];

$newActividad->save();

return("master");

}

//=====================================================================
public function deshabilitarModulo(Request $request){
	$id = $request->input('id');
	$datos = tbl_modulos::find($id);
	if($datos['i_estado']==1){
		tbl_modulos::Where('i_pk_id',$id)->update(['i_estado' => 0]);
	}else{
		tbl_modulos::Where('i_pk_id',$id)->update(['i_estado' => 1]);
	}
	return $this->cargarActividades();
}
//=====================================================================


}//Fin del controlador
