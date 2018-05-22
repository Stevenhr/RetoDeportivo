<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Evento;

class controladorAdmin extends Controller{

	//=================================================================
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
}//Fin de la clase
