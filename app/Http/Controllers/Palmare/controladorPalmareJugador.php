<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PalmareJugador;
use Illuminate\support\Facades\Redirect;
use App\Http\Requests\palmareJugadorFormRequest;
use DB;

class jugadoresController extends Controller
{
    /*public function__construct(){

    }
    */

    public function index(Request $request){

        
        
    }

    public function create(){

        return view('create');
    }

    public function store(palmareJugadorFormRequest $request){

        
        
    }

    public function show($i_pk_id){

        
    }

    public function edit($i_pk_id){

        
    }

    public function update(){

        
    }

    public function destroy($i_pk_id){
        
    }
}
