@extends('layouts.app')
    @section('content')
    <h1 class="page-header">
        Productos
        <small>Editar Producto</small>
    </h1>
    @if(session('status'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Info!</strong> {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('products.update', $products->id) }}" method="POST" enctype='multipart/form-data'>
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}
            <div class="form-group has-feedback">
                <p>Nombre del Producto: </p>
                <input type="text" class="form-control" id="title" name="name" 
                value="{{ $products->name }}">
            </div>
            <div class="form-group has-feedback">
                <p>Slug: </p>
                <input type="text" class="form-control" id="slug" name="slug" 
                value="{{ $products->slug }}">
            </div>
            <div class="form-group has-feedback {{ $errors->has('image-file') ? 'has-error' : '' }} ">
                <input type="file" class="form-control" id="image-file" name="image-file">
                @if($errors->has('image-file'))
                    <span class="help-block">
                        <strong> {{ $errors->first('image-file') }} </strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <p>ID Producto: </p>
                <input type="text" class="form-control" id="ref_code" name="ref_code" 
                value="{{ $products->ref_code }}">
            </div>
            <div class="form-group has-feedback">
                <p>Precio: </p>
                <input type="text" class="form-control" id="price" name="price" 
                value="{{ $products->price }}">
            </div>
            <div class="form-group has-feedback">
                <p>Cantidad: </p>
                <input type="text" class="form-control" id="quantity" name="quantity" 
                value="{{ $products->quantity }}">
            </div>
            <div class="form-group has-feedback {{ $errors->has('category_id') ? 'has-error' : '' }} ">
                <select class="form-control" name="category_id" id="category_id">
                    <option value="">Categoria</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                @if($errors->has('category_id'))
                    <span class="help-block">
                        <strong> {{ $errors->first('category_id') }} </strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('availability') ? 'has-error' : '' }}">
                <select class="form-control" name="availability" id="availability">
                    <option value=""> Disponibilidad </option>
                    <option value="1" @if($products->availability==1) selected @endif>En Stock</option>
                    <option value="0" @if($products->availability==0) selected @endif>No disponible</option>
                </select>
                @if($errors->has('availability'))
                    <span class="help-block">
                        <strong> {{ $errors->first('availability') }} </strong>
                    </span>
                @endif
            </div>  
            <div class="form-group has-feedback {{ $errors->has('condition') ? 'has-error' : '' }}">
                <select class="form-control" name="condition" id="condition">
                    <option value=""> Condición </option>
                    <option value="1" @if($products->condition==1) selected @endif>Nuevo</option>
                    <option value="0" @if($products->condition==1) selected @endif>Usado</option>
                </select>
                @if($errors->has('condition'))
                    <span class="help-block">
                        <strong> {{ $errors->first('condition') }} </strong>
                    </span>
                @endif
            </div>  
            <div class="form-group has-feedback">
                <p>Descripción: </p>
                <input type="text" class="form-control" id="description" name="description" 
                value="{{ $products->description }}">
            </div>
            <button class="btn btn-success">
                Actualizar Producto
            </button>
    </form>
    @endsection