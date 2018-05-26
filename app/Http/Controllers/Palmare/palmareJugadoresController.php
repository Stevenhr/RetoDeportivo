<?php

namespace App\Http\Controllers\Palmare;

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;
use App\palmareJugador;
use Illuminate\support\Facades\Redirect;
use DB;

class palmareJugadoresController extends Controller
{
    public function create(Request $request){

        $jugadorPalmare = new palmareJugador;

        $jugadorPalmare->vc_competencia=$request->input('vc_competencia');
        $jugadorPalmare->vc_anio=$request->input('vc_anio');
        $jugadorPalmare->vc_equipo=$request->input('vc_equipo');
        $jugadorPalmare->tbl_jugador_i_pk_id=$request->input('tbl_jugador_i_pk_id');
        $jugadorPalmare->save();

        $jugadores=DB::table('tbl_jugador') 
        ->orderBy('i_pk_id', 'desc') 
        ->paginate(7); 
 
        return view('Palmare.inicio',["jugadores"=>$jugadores]);

    }
}