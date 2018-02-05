@extends('layouts.app')
    @section('content')
            <h1 class="page-header">
                Productos
                <span class="pull-right">
                    <a href="{{ route('products.create') }}" class="btn btn-success">
                        <i class="glyphicon glyphicon-list"></i> Nuevo Producto
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
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Ref.</th>
                    <th>Precio</th>
                    <th>Cant.</th>
                    <th>Categoría</th>
                    <th>Disponibilidad</th>
                    <th>Condición</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th colspan="2">Acciones</th>
                </tr>

                @foreach($products as $product)

                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->ref_code }}</td>
                        <td>$ {{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->availability }}</td>
                        <td>{{ $product->condition }}</td>
                        <td>{{ $product->description }}</td>
                        <td><img src="{{ asset('/image/products/'.$product->cover_img) }}" alt="" class="img-responsive"></td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-action="{{ route('products.destroy', $product->id) }}" data-name="{{ $product->name }}" data-toggle="modal" data-target="#confirm-delete">
                                <i class="glyphicon glyphicon-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $products->links() }}
            {{-- $categories->links() --}}
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