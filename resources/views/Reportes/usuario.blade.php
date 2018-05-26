@extends('master')                              

@section('content') 

	<div class="container-fluid">
	  <h1>Reportes Usuario</h1>
	  	{!! Form::open(['url' => 'reportes']) !!}
        <button type="button submit" class="btn btn-primary" name="id_reporte" value="1"> Mis Eventos </button>
        <button type="button submit" class="btn btn-primary" name="id_reporte" value="2"> Mis Organizaciones</button>
         <button type="button submit" class="btn btn-primary" name="id_reporte" value="3">Mis Pronosticos </button>

        {!! Form::close() !!}
		@yield('contenido')
	</div>
	
@endsection