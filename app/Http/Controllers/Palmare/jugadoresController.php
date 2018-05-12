<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;
use Illuminate\support\Facades\Redirect;
use App\Http\Requests\jugadoresFormRequest;
use DB;

class jugadoresController extends Controller
{
    /*public function__construct(){

    }
    */

    public function index(Request $request){

        if ($request) {
            
            $query=trim($request->get('searchText'));
            $jugadores=DB::table('tbl_jugador')->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('i_pk_id', 'desc')
            ->paginate(7);
            
            return view('inicio', ["jugadores"=>$jugadores, "searchText"=>$query]); 
        }
        
    }

    public function create(){

        return view('create');
    }

    public function store(jugadoresFormRequest $request){

        $jugador= new Jugador;

        $jugador->nombre=$request->get('nombre');
        $jugador->i_altura=$request->get('i_altura');
        $jugador->vc_dorsal=$request->get('vc_dorsal');
        $jugador->vc_posicion=$request->get('vc_posicion');
        $jugador->vc_lugarNacimiento=$request->get('vc_lugarNacimiento');
        $jugador->d_fechanacimiento=$request->get('d_fechanacimiento');
        $jugador->tx_biografia=$request->get('tx_biografia');
        $jugador->vc_foto=$request->get('vc_foto');
        $jugador->save();

        return Redirect::to('inicio');

    }

    public function show($i_pk_id){

        return view("show",["jugadores"=>Jugador::findOrFail($i_pk_id)]);
    }

    public function edit($i_pk_id){

        return view("edit",["jugadores"=>Jugador::findOrFail($i_pk_id)]);
    }

    public function update(jugadoresFormRequest $request, $i_pk_id){

        $jugador=Jugador::findOrFail($i_pk_id);
        $jugador=Jugador::all();
        $jugador->update();

        return Redirect::to('inicio');
    }

    public function destroy($i_pk_id){
        /*
            $jugador=Jugador::findOrFail($i_pk_id);
            $jugador->'condicion'='0';
            $jugador->update();

            return Redirect::to('inicio');
        */
    }
}
