@extends('layouts.blank')
@section('title')
    Editar Vehiculo
@endsection
@section('content')
    <br>
    @if (Route::has('login'))
        <div class="text-right">
            @auth
                <a href="{{ route('owner.index') }}" class="btn btn-outline-danger">Atras</a>
                <a href="{{ url('/home') }}" class="btn btn-outline-secondary">Cuenta</a>
            @endauth
        </div>
    @endif
    <h2>Editar datos de vehiculo y asignacion</h2>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/vehicles/{{ $data->identification }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="license_plate" class="col-sm-2 col-form-label">Placa</label>
            <div class="col-sm-10">
                <h3>{{ $dataV->license_plate }}</h3>
            </div>
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" placeholder="Negro" value="{{ $dataV->color }}">
        </div>
        <div class="form-group">
            <label for="brand">Marca</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="yamaha" value="{{ $dataV->brand }}">
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <select name="type" id="type" class="form-control">
                <option value="">elija una opcion</option>
                <option value="Particular">Particular</option>
                <option value="Publico">Publico</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fk_owner">Propietario</label>
            <select name="fk_owner" id="fk_owner" class="form-control">
                <option value="">Seleccione un Propietario</option>
                @foreach($owners as $owner)
                    <option value="{{ $owner->identification }}">{{ $owner->last_name }} {{ $owner->first_name }} {{ $owner->second_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fk_driver">Conductor</label>
            <select name="fk_driver" id="fk_driver" class="form-control">
                <option value="">Elija un condutor</option>
                @foreach($drivers as $driver)
                    <option value="{{ $driver->identification }}">{{ $driver->last_name }} {{ $driver->first_name }} {{ $driver->second_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Modificar</button>
    </form>
@endsection