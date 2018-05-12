<?php

namespace App\Http\Controllers\Palmare;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\ModalCrudPalmare;

class controladorPalmare extends Controller{

	private $ruta = 'retoDeportivo';

	public function iniciarCrud(Request $request){

		$crud = new ModalCrudPalmare;
		$obtenerID = ModalCrudPalmare::All();
		$ID = $obtenerID->count();
		$ID++;
		$obtenerTabla = ModalCrudPalmare::All();
		$crud['i_pk_id'] = $ID;
		$crud['i_altura'] = $request->input('altura');
		$crud['vc_dorsal'] = $request->input('dorsal');
		$crud['vc_posicion'] = $request->input('posicion');
		$crud['vc_lugarNacimiento'] = $request->input('lugarNac');
		$crud['d_fechanacimiento'] = $request->input('fechaNac');
		$crud['tbl_equipo_i_pk_id'] = $request->input('tblEquipo');
		$crud['tx_biografica'] = $request->input('biografia');
        $file = $request->file('imagen');
        $nombre = $file->getClientOriginalName();
        \Storage::disk('local')->put($nombre , \File::get($file));
        $crud['vc_foto'] = "public/storage/imagenes/".$file->getClientOriginalName();
        $crud->save();
		return view('crud');
	}

	/*public function mostrarPaginaInicial(){
		$data = 
	}

	public function formularioRegistro(){

	}

	public function recuperarDatos(Request $request){

	}

	

	public function mostrarFormulario($id){

	}

	public function editarRegistro(Request $request){

	}	*/
	public function deshabilitar(Request $request){
		$id = $request->input('dlt');
		$deshabilitar = ModalCrudPalmare::destroy($id);
		return view ('eliminado');

	}
}