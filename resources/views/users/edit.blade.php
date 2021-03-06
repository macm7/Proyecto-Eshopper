@extends('layouts.app')
@section('content')
<div class="panel-heading">
    Editar Usuario                      
</div>
<div class="panel-body">
    <!-- Display Validation Errors -->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            Hubo algunos problemas con tus datos revisa de nuevo.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form class="form-horizontal" role="form" method="POST"
            action="{{ url('admin/users/'.$user->id) }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Nombre y Apellido</label>

            <div class="col-md-6">
                <input id="display_name" type="text" class="form-control" name="name"
                        value="{{$user->name}}"
                        required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>                            
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Correo Electronico</label>

            <div class="col-md-6">
                <input id="email" type="text" class="form-control" name="email"
                        value="{{$user->email}}"
                        required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Contraseña</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" autofocus>

                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password_confirmation" class="col-md-4 control-label">Confirma Contraseña</label>

            <div class="col-md-6">
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" autofocus>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">
            <label for="roles" class="col-md-4 control-label">Roles</label>

            <div class="col-md-6">

                <select id="role" name="roles[]" multiple>
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}" {{in_array($role->id, $userRoles) ? "selected" : null}}>
                            {{$role->display_name}}
                        </option>
                    @endforeach
                </select>

                @if ($errors->has('roles'))
                    <span class="help-block">
                    <strong>{{ $errors->first('roles') }}</strong>
                </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Actualizar
                </button>

                <a class="btn btn-info btn-volver" href="{{ url('admin/users') }}">
                    Cancelar
                </a>
            </div>
        </div>
    </form>

</div>
@endsection
