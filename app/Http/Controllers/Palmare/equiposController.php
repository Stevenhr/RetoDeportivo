<?php

namespace App\Http\Controllers\Palmare;

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;
use App\Equipo;
use Illuminate\support\Facades\Redirect;
use DB;

class equiposController extends Controller{

    public function index(Request $request){
 
        $equipos=DB::table('tbl_equipo') 
        ->orderBy('i_pk_id', 'desc') 
        ->paginate(7); 
 
        return view('Palmare.inicioEquipo', ["equipos"=>$equipos]); 
    
    }

    public function create(){

        return view('Palmare.createEquipo');
    }

    public function store(Request $request){

        $equipo= new Equipo;

        $equipo->nombre=$request->get('nombre');
        $equipo->vc_presidente=$request->get('vc_presidente');
        $equipo->vc_entrenador=$request->get('vc_entrenador');
        $equipo->vc_estadio=$request->get('vc_estadio');
        $equipo->vc_ubicacion=$request->get('vc_ubicacion');
        $equipo->vc_fundado=$request->get('vc_fundado');
        $equipo->save();

        $equipos=DB::table('tbl_equipo') 
        ->orderBy('i_pk_id', 'desc') 
        ->paginate(7); 
 
        return view('Palmare.inicioEquipo',["equipos"=>$equipos]); 

    }

    public function show($i_pk_id){
        
        return view("Palmare/showEquipo",["equipos"=>Equipo::findOrFail($i_pk_id)]); 
    }

    public function edit($i_pk_id){

        return view("Palmare/editEquipo",["equipos"=>Equipo::findOrFail($i_pk_id)]); 
    }

    public function update(Request $request, $i_pk_id){

        $equipo=Equipo::findOrFail($i_pk_id);
        $equipo->nombre=$request->get('nombre');
        $equipo->vc_presidente=$request->get('vc_presidente');
        $equipo->vc_entrenador=$request->get('vc_entrenador');
        $equipo->vc_estadio=$request->get('vc_estadio');
        $equipo->vc_ubicacion=$request->get('vc_ubicacion');
        $equipo->vc_fundado=$request->get('vc_fundado');
        $equipo->update();

        $equipos=DB::table('tbl_equipo') 
        ->orderBy('i_pk_id', 'desc') 
        ->paginate(7); 
 
        return view('Palmare.inicioEquipo',["equipos"=>$equipos]); 
    }

    public function destroy($i_pk_id){

    $equipo = Equipo::find($i_pk_id); 
    $equipo->delete(); 

    $equipos=DB::table('tbl_equipo') 
    ->orderBy('i_pk_id', 'desc') 
    ->paginate(7); 
 
        return view('Palmare.inicioEquipo',["equipos"=>$equipos]);
  
    }
}
