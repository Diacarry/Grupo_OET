@extends('layouts.blank')
@section('title')
    Asignaciones
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
        <div class="card">
            <div class="card-header">
                <h2>ASIGNACIONES</h2>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        Listado de Asignaciones
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Placa</th>
                                    <th scope="col">Conductor</th>
                                    <th scope="col">Propietario</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $info)
                                    <tr>
                                        <th>{{ $info->license_plate }}</th>
                                        <td>{{ $info->fk_driver }}</td>
                                        <td>{{ $info->fk_owner }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <div class="alert alert-danger" role="alert">
                                            No hay vehiculos Asignados
                                        </div>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{ $data->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection