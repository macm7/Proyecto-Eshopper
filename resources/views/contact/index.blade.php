@extends('layouts.app')
@section('content')
    <h1 class="page-header">
        Información de Contacto
        <span class="pull-right">
            <a href="{{ route('contact.create') }}" class="btn btn-success">
                <i class="glyphicon glyphicon-list"></i> Crear contacto
            </a>
        </span>
    </h1>
    @if(session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Info!</strong> {{ session('status') }}
    </div>
    @endif
<table class="table table-bordered">
    <tr>
     
        <th>Nombre de la Compañía</th>
        <th>Dirección</th>
        <th>Estado</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Facebook</th>
        <th>Twitter</th>
		<th>Google</th>
        <th>YouTube</th>
        <th colspan="2">Acción</th>
    </tr>
    @foreach($contact as $contac)
    <tr>

        <td>{{ $contac->name }}</td>
        <td>{{ $contac->address }}</td>
        <td>{{ $contac->state }}</td>
        <td>{{ $contac->phone }}</td>
        <td><a href="mailto:{{ $contac->mail }}">{{ $contac->mail }}</a></td>
        <td>{{ $contac->facebook }}</td>
        <td>{{ $contac->twitter }}</td>
		<td>{{ $contac->google }}</td>
        <td>{{ $contac->youtube }}</td>
        <td>
            <a href="{{ route('contact.edit', $contac) }}" class="btn btn-primary">
                <i class="glyphicon glyphicon-edit"></i>
            </a> 
        </td>
        <td>
            <button class="btn btn-danger" data-action="{{ route('contact.destroy', $contac) }}" data-name="{{ $contac->name }}" data-toggle="modal" data-target="#confirm-delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        </td>
    </tr>
    @endforeach
    </table>		    				

	</div>
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					</div>
					<div class="modal-body">
						<p>¿Esta seguro que desea eliminar el registro?</p>
						<p class="nombre"></p>
					</div>
					<div class="modal-footer">
						<form class="form-inline form-delete" role="form" method="POST" action="">
							{!! method_field('DELETE') !!}
							{!! csrf_field() !!}
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancelar
							</button>
							<button id="delete-btn" class="btn btn-danger" title="Eliminar">
								Eliminar
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	@endsection
