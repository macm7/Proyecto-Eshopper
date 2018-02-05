@extends('layouts.app')
@section('content')
    <h1 class="page-header">
        Reseñas
    </h1>
    @if(session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Info!</strong> {{ session('status') }}
    </div>
    @endif
    <table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Reseña</th>
        <th>Producto</th>
        <th colspan="2">Acción</th>
    </tr>
    @foreach($reviews as $review)
    <tr>
        <td>{{ $review->id }}</td>
        <td>{{ $review->name }}</td>
        <td>{{ $review->email }}</td>
        <td>{{ $review->review }}</td>
        <td>{{ $review->product_id }}</td>
        <td>
            <button class="btn btn-danger" data-action="{{ route('review.destroy', $review->id) }}" data-name="{{ $review->id }}" data-toggle="modal" data-target="#confirm-delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        </td>
    </tr>
    @endforeach
    </table>
    {{ $reviews->links() }}
</div>
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <p>¿Seguro que desea eliminar este registro?</p>
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