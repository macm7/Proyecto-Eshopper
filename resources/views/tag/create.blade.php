@extends('layouts.app')
@section('content')
<h1 class="page-header">
Etiquetas
<small>Crear etiqueta</small>
</h1>
@if(session('status'))
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Info!</strong> {{ session('status') }}
</div>
@endif
<form action="{{ route('tag.index') }}" method="POST" enctype="multipart/form-data">

{!! csrf_field() !!}
{!! method_field('POST') !!}

    <div class="form-group has-feedback {{ $errors->has('tag') ? 'has-error' : '' }}">
        <input type="text" class="form-control" id="title" name="tag" 
        placeholder="Nombre de la categoria" value="{{ old('tag') }}">
        @if($errors->has('tag'))
            <span class="help-block">
                <strong>{{ $errors->first('tag') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group has-feedback {{ $errors->has('slug') ? 'has-error' : '' }}">
        <input type="text" class="form-control" id="slug" name="slug" 
        placeholder="Slug" value="{{ old('slug') }}">
        @if($errors->has('slug'))
            <span class="help-block">
                <strong>{{ $errors->first('slug') }}</strong>
            </span>
        @endif
    </div>
        <button class="btn btn-success">
            Crear Etiqueta
        </button>
        </form>
@endsection