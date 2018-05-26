<div class="modal fade modal-slide-in-right" aria-hidden="true"
	role="dialog" tabindex="-1" id="modal-createPalmare-{{$datos->i_pk_id}}">
	{!! Form::open(['url'=>'palmareJugadores', 'method'=>'POST', 'class'=>'needs-validation', 'novalidate']) !!} 
  	{{Form::token()}} 
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">X</span>
					</button>
				</div>
				<div class="modal-body">
					<h3>Crear palmare</h3>
					<div class="row"> 
					    <div class="col-md-12"> 
					      	<div class="form-group"> 
					        	<label for="vc_competencia">Competencia:</label> 
					        	<input type="text" class="form-control" name="vc_competencia" id="vc_competencia" placeholder="Ingrese la competencia" aria-describedby="nombreHelp" required> 
					        	<div class="valid-feedback"> 
					              !Bien¡ 
					          	</div> 
					          	<div class="invalid-feedback"> 
					                Ingrese la competencia. 
					            </div> 
					      	</div> 
					    </div>
					    <div class="col-md-12"> 
					      	<div class="form-group"> 
					        	<label for="vc_anio">Año:</label> 
					        	<input type="text" class="form-control" name="vc_anio" id="vc_anio" placeholder="Ingrese el año" aria-describedby="nombreHelp" required> 
					        	<div class="valid-feedback"> 
					              !Bien¡ 
					          	</div> 
					          	<div class="invalid-feedback"> 
					                Ingrese el año. 
					            </div> 
					      	</div>
					    </div>  	 
					    <div class="col-md-12"> 
					      	<div class="form-group"> 
					        	<label for="vc_equipo">Equipo:</label> 
					        	<input type="text" class="form-control" name="vc_equipo" id="vc_equipo" placeholder="Ingrese el equipo" aria-describedby="nombreHelp" required> 
					        	<div class="valid-feedback"> 
					              !Bien¡ 
					          	</div> 
					          	<div class="invalid-feedback"> 
					                Ingrese el equipo. 
					            </div> 
					      	</div> 
					    </div>
					    <input type="hidden" value="{{$datos->i_pk_id}}" name="tbl_jugador_i_pk_id">
					</div>    
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-success">Confirmar</button>
				</div>
			</div>
		</div>
	{{Form::close()}}
</div>