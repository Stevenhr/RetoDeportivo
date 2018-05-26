<div class="modal fade modal-slide-in-right" aria-hidden="true"
	role="dialog" tabindex="-1" id="modal-delete-{{$datos->i_pk_id}}">
	{{Form::open(array('action'=>array('Palmare\jugadoresController@destroy', $datos->i_pk_id), 'method'=>'delete'))}}
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">X</span>
					</button>
				</div>
				<div class="modal-body">
					<h3>Eliminar jugador</h3> <br><br>
					<p>¿Desea eliminar el jugador?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-success">Confirmar</button>
				</div>
			</div>
		</div>
	{{Form::close()}}
</div>