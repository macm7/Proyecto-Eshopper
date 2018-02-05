@extends('layouts.app')
@section('content')
<div class="panel-heading">Crear un Nuevo Rol</div>
<div class="panel-body">
    <!-- Display Validation Errors -->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Oops!</strong> Hubo algunos problemas con tus datos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/roles') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Nombre</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                        required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
            <label for="display_name" class="col-md-4 control-label">Nombre a mostrar:</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="display_name" value="{{ old('display_name') }}"
                        required autofocus>

                @if ($errors->has('display_name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('display_name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Descripcion</label>

            <div class="col-md-6">
                <textarea rows="4" cols="50" name="description" id="description" class="form-control">{{ old('description') }}</textarea>

                @if ($errors->has('description'))
                    <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('permissions') ? ' has-error' : '' }}">
            <label for="permissions" class="col-md-4 control-label">Permisos</label>

            <div class="col-md-6">
                @foreach ($permissions as $key => $permission)
                    <input type="checkbox"  value="{{$key}}" name="permissions[]"> {{$permission}}<br>
                @endforeach

                @if ($errors->has('permissions'))
                    <span class="help-block">
                    <strong>{{ $errors->first('permissions') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
                <a class="btn btn-info btn-volver" href="{{ url('admin/roles') }}">
                    Cancelar
                </a>
            </div>
        </div>
    </form>
</div>
@endsection
