@extends('layouts.app')
@section('content')
<h1 class="page-header">
    Editar Post
</h1>
@if(session('status'))
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Info!</strong> {{ session('status') }}
</div>
@endif
<form action="{{ route('blog.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}   
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="title" name="title" 
        placeholder="Title" value="{{ $post->title }}">
    </div>
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="slug" name="slug" 
        placeholder="Slug" value="{{ $post->slug }}">
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
        <input type="text" class="form-control" id="image-file" name="image-file" 
        placeholder="Image" readonly value="{{ $post->image_name }}">
    </div>
    <div class="form-group has-feedback">
        <textarea name="content" id="content" cols="180" 
        rows="3" class="form-control" 
        placeholder="Content">{{ $post->content }}</textarea>
    </div>
    <button class="btn btn-success">
    Guardar Post
    </button>
</form>
@endsection