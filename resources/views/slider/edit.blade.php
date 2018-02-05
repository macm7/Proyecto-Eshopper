@extends('layouts.app')
@section('content')
    <h1 class="page-header">
        Editar Slider
    </h1>
    @if(session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Info!</strong> {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('slider.update', $slide->id) }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
            <input type="text" class="form-control" id="name" name="name" value="{{ $slide->name }}">
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
            <option value="" >SELECCIONE</option>
            <option value="1" @if($slide->status==1) selected @endif>Activo</option>
            <option value="0" @if($slide->status==0) selected @endif>Inactivo</option>
            </select>
        </div>
        <button class="btn btn-success">
        Guardar slide
        </button>
    </form>
@endsection