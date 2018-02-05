@extends('layouts.app')
@section('content')
<h1 class="page-header">
    Crear Post
</h1>
@if(session('status'))
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Info!</strong> {{ session('status') }}
</div>
@endif
<form action="{{ route('blog.index') }}" method="POST" enctype="multipart/form-data">

    {!! csrf_field() !!}
    {!! method_field('POST') !!}

    <div class="form-group has-feedback {{ $errors->has('title') ? 'has-error' : '' }}">
        <input type="text" class="form-control" id="title" name="title" 
        placeholder="Título" value="{{ old('title') }}">
        @if($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
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

    <div class="form-group has-feedback {{ $errors->has('image-file') ? 'has-error' : '' }}">
        <input type="file" class="form-control" id="image-file" name="image-file">
        @if($errors->has('image-file'))
            <span class="help-block">
                <strong>{{ $errors->first('image-file') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group has-feedback {{ $errors->has('content') ? 'has-error' : '' }}">
        <textarea name="content" id="content" cols="180" rows="3" 
        placeholder="Contenido" class="form-control">{{old('content')}}</textarea>
        @if($errors->has('content'))
            <span class="help-block">
                <strong>{{ $errors->first('content') }}</strong>
            </span>
        @endif
    </div>
        <button class="btn btn-success">
            Crear Post
        </button>  
</form>
@endsection