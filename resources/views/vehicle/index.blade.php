@extends('layouts.blank')
@section('title')
    Vehiculos
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
                <h2>VEHICULOS</h2>
            </div>
            <div class="card-body">
            <p><a href="{{ route('vehicles.create') }}" class="btn btn-success">registrar un vehiculo</a></p>
                <div class="card">
                    <div class="card-header">
                        Listado de Vehiculos
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Placa</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Conductor</th>
                                    <th scope="col">Propietario</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $info)
                                    <tr>
                                        <th>{{ $info->license_plate }}</th>
                                        <td>{{ $info->color }}</td>
                                        <td>{{ $info->brand }}</td>
                                        <td>{{ $info->type }}</td>
                                        <td>{{ $info->fk_driver }}</td>
                                        <td>{{ $info->fk_owner }}</td>
                                        <td><a href="/vehicles/{{ $info->license_plate }}/edit" class="btn btn-warning"></a></td>
                                        <td>
                                            <form action="/vehicles/{{ $info->license_plate }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <div class="alert alert-danger" role="alert">
                                            No hay vehiculos registrados
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