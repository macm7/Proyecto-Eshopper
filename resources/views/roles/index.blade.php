@extends('layouts.app')
@section('content')
                    <div class="panel-heading">Manejo de Roles</div>

                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($roles as $key => $role)

                                <tr class="list-users">
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->display_name }}</td>
                                    <td>{{ $role->description }}</td>
                                    <td>
                                        <!--<a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Editar</a>-->

                                        <form action="{{ url('admin/roles/'.$role->id) }}" method="POST" style="display: inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-task-{{ $role->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Borrar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('roles.create') }}" class="btn btn-success">Nuevo Rol</a>
                    </div>
@endsection
