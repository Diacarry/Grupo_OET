@extends('layouts.blank')
@section('title')
    Propietarios
@endsection
@section('content')
    <div class="flex-center position-ref full-height"><br>
        @if (Route::has('login'))
            <div class="text-right">
                @auth
                    <a href="{{ url('/') }}" class="btn btn-outline-danger">Menu</a>
                    <a href="{{ url('/home') }}" class="btn btn-outline-secondary">Cuenta</a>
                @endauth
            </div>
        @endif
        <div class="text-right">
            <a href="{{ url('') }}" class="btn btn-outline-danger">Menu</a>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>PROPIETARIOS</h2>
            </div>
            <div class="card-body">
            <p><a href="{{ route('owners.create') }}" class="btn btn-success">registrar un propietario</a></p>
                <div class="card">
                    <div class="card-header">
                        Listado de Pripietarios
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Primer Nombre</th>
                                    <th scope="col">Segundo Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Ciudad</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $info)
                                    <tr>
                                        <th>{{ $info->identification }}</th>
                                        <td>{{ $info->first_name }}</td>
                                        <td>{{ $info->second_name }}</td>
                                        <td>{{ $info->last_name }}</td>
                                        <td>{{ $info->address }}</td>
                                        <td>{{ $info->phone }}</td>
                                        <td>{{ $info->city }}</td>
                                        <td><a href="/owners/{{ $info->identification }}/edit" class="btn btn-warning"></a></td>
                                        <td>
                                            <form action="/owners/{{ $info->identification }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <div class="alert alert-danger" role="alert">
                                            No hay pripietarios registrados
                                        </div>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection