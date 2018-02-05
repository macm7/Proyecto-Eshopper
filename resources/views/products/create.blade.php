@extends('layouts.app')
    @section('content')
    <h1 class="page-header">
        Productos
        <small>Crear Producto</small>
    </h1>
    @if(session('status'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Info!</strong> {{ session('status') }}
        </div>
    @endif
            <form action="{{ route('products.index') }}" method="POST" enctype='multipart/form-data'>
                {!! csrf_field() !!}
                {!! method_field('POST') !!}
                <table>
                    <tr>
                        <td> 
                            <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }} ">
                                <input type="text" class="form-control" id="title" name="name" 
                                placeholder="Nombre Producto" value="{{ old('name') }}" size="500">
                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong> {{ $errors->first('name') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="form-group has-feedback {{ $errors->has('slug') ? 'has-error' : '' }} ">
                                <input type="text" class="form-control" id="slug" name="slug" 
                                placeholder="Nombre imagen" value="{{ old('slug') }}" size="500">
                                @if($errors->has('slug'))
                                    <span class="help-block">
                                        <strong> {{ $errors->first('slug') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group has-feedback {{ $errors->has('image-file') ? 'has-error' : '' }} ">
                                <input type="file" class="form-control" id="image-file" name="image-file">
                                @if($errors->has('image-file'))
                                    <span class="help-block">
                                        <strong> {{ $errors->first('image-file') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group has-feedback {{ $errors->has('ref_code') ? 'has-error' : '' }} ">
                                <input type="text" class="form-control" id="ref_code" name="ref_code" 
                                placeholder="ID Producto" value="{{ old('ref_code') }}">
                                @if($errors->has('ref_code'))
                                    <span class="help-block">
                                        <strong> {{ $errors->first('ref_code') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group has-feedback {{ $errors->has('price') ? 'has-error' : '' }} ">
                                <input type="text" class="form-control" id="price" name="price" 
                                placeholder="Precio" value="{{ old('price') }}">
                                @if($errors->has('price'))
                                    <span class="help-block">
                                        <strong> {{ $errors->first('price') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group has-feedback {{ $errors->has('quantity') ? 'has-error' : '' }} ">
                                <input type="text" class="form-control" id="quantity" name="quantity" 
                                placeholder="Cantidad" value="{{ old('quantity') }}">
                                @if($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong> {{ $errors->first('quantity') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
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
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group has-feedback {{ $errors->has('availability') ? 'has-error' : '' }}">
                                <select class="form-control" name="availability" id="availability">
                                    <option value=""> Disponibilidad </option>
                                    <option value="En Stock">En Stock</option>
                                    <option value="No disponible">No disponible</option>
                                </select>
                                @if($errors->has('availability'))
                                    <span class="help-block">
                                        <strong> {{ $errors->first('availability') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group has-feedback {{ $errors->has('condition') ? 'has-error' : '' }}">
                                <select class="form-control" name="condition" id="condition">
                                    <option value=""> Condición </option>
                                    <option value="Nuevo">Nuevo</option>
                                    <option value="Usado">Usado</option>
                                </select>
                                @if($errors->has('condition'))
                                    <span class="help-block">
                                        <strong> {{ $errors->first('condition') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group has-feedback {{ $errors->has('description') ? 'has-error' : '' }} ">
                                <textarea class="form-control" rows="3" id="description" name="description" cols="30" rows="10" placeholder="Descripción"></textarea>
                                @if($errors->has('description'))
                                    <span class="help-block">
                                        <strong> {{ $errors->first('description') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn btn-success">
                            Crear Producto
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
    @endsection