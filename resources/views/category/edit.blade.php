@extends('layouts.app')
@section('content')
<h1 class="page-header">
    Editar Categorías
</h1>
@if(session('status'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Info!</strong> {{ session('status') }}
</div>
@endif
<form action="{{ route('category.update', $category->id) }}" method="POST">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}   
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="title" name="category" 
        placeholder="Nombre de categoria" value="{{ $category->category }}">
    </div>
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="slug" name="slug" 
        placeholder="Slug" value="{{ $category->slug }}">
    </div>
    <button class="btn btn-success">
        Editar categoría
    </button>
</form>
@endsection