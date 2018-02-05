@extends('layouts.app')
@section('content')
<!-- Slider Entries Column -->
    <h1 class="page-header">
        Listado de Sliders
        <span class="pull-right">
            <a href="{{ route('slider.create') }}" class="btn btn-success">
                <i class="glyphicon glyphicon-list"></i> Nuevo Slide
            </a>
        </span>
    </h1>
    @if(session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Info!</strong> {{ session('status') }}
    </div>
    @endif
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Status</th>
            <th>Creado</th>
            <th colspan="2">Acción</th>
        </tr>
        @foreach($sliders as $slide)
            <tr>
                <td>{{ $slide->id }}</td>
                <td>{{ $slide->name }}</td>
                <td><img src="{{ asset('/image/sliders/'.$slide->img_name) }}" alt="{{ $slide->img_name }}" class="img-responsive"></td>
                <td>{{ $slide->status }}</td>
                <td>{{ $slide->created_at->format('d/m/Y h:i:s') }}</td>
                <td>
                    <a href="{{ route('slider.edit', $slide->id) }}" class="btn btn-primary">
                        <i class="glyphicon glyphicon-edit"></i>
                    </a>
                </td>
                <td>
                    <button class="btn btn-danger"
                    data-action="{{ route('slider.destroy', $slide->id) }}"
                    data-name="{{ $slide->img_name }}"
                    data-toggle="modal"
                    data-target="#confirm-delete"
                    >
                        <i class="glyphicon glyphicon-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $sliders->links() }}
            <div class="modal fade" id="confirm-delete" tabindex="-1"
                 role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                        </div>
                        <div class="modal-body">
                            <p>¿Seguro que desea eliminar este
                                registro?</p>
                            <p class="nombre"></p>
                        </div>
                        <div class="modal-footer">
                            <form class="form-inline form-delete"
                                  role="form"
                                  method="POST"
                                  action="">
                                {!! method_field('DELETE') !!}
                                {!! csrf_field() !!}
                                <button type="button"
                                        class="btn btn-default"
                                        data-dismiss="modal">Cancelar
                                </button>
                                <button id="delete-btn"
                                        class="btn btn-danger"
                                        title="Eliminar">Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection