@extends('layouts.app')
@section('content')
<h1 class="page-header">
Crear Categoría
</h1>
@if(session('status'))
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Info!</strong> {{ session('status') }}
</div>
@endif
<form action="{{ route('category.index') }}" method="POST" enctype="multipart/form-data">

{!! csrf_field() !!}
{!! method_field('POST') !!}

    <div class="form-group has-feedback {{ $errors->has('category') ? 'has-error' : '' }}">
        <input type="text" class="form-control" id="title" name="category" 
        placeholder="Nombre de la categoría" value="{{ old('category') }}">
        @if($errors->has('category'))
            <span class="help-block">
                <strong>{{ $errors->first('category') }}</strong>
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
            Crear Categoría
        </button>
        </form>
@endsection