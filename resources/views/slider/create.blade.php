@extends('layouts.app')
@section('content')
    <h1 class="page-header">
        Creación de Slider
    </h1>
    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {!! method_field('POST') !!}
        <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la imagen">
            @if($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div> 
        <div class="form-group has-feedback {{ $errors->has('image-file') ? 'has-error' : '' }}">
            <input type="file" class="form-control" id="image-file" name="image-file">
            @if($errors->has('image-file'))
                <span class="help-block">
                    <strong>{{ $errors->first('image-file') }}</strong>
                </span>
            @endif
        </div>        
        
        <div class="form-group has-feedback">
            <select class="form-control" name="status" id="status">
            <option value="">Estatus</option>
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
            </select>
        </div>
        <button class="btn btn-success">
        Crear slide
        </button>
    </form>
@endsection