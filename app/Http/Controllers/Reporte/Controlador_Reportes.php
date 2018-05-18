<?php

namespace App\Http\Controllers\Reporte;
use App\Http\Controllers\Controller;
use \Session;

use Illuminate\Http\Request;
use App\tbl_acceso;

class Controlador_Reportes extends Controller
{
    public function prueba(){
    	Session::forget('prueba');
    	$id=Session::get('Id_Usuario');

    	$datos2=tbl_acceso::all();
    	
    	Session::put('prueba',$datos2);
    	return redirect('/prueba');
    }
}
