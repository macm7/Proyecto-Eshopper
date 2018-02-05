@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Bienvenido!</div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @role('admin')
        Panel de Administrador
        @endrole
        @role('usuario')
        Panel de Creacion de Post
        @endrole
    </div>
</div>
@endsection
