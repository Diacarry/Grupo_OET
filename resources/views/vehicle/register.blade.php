@extends('layouts.blank')
@section('title')
    Registro Vehiculo
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
    <div class="text-right">
        <a href="{{ url('vehicles') }}" class="btn btn-outline-danger">Atras</a>
    </div>
    <h2>Registrar un nuevo vehiculo</h2>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/vehicles" method="POST">
        @csrf
        <div class="form-group row">
            <label for="license_plate" class="col-sm-2 col-form-label">Placa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="license_plate" name="license_plate" placeholder="xxx-000" value="{{ old('license_plate') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="color" class="col-sm-2 col-form-label">Color</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="color" name="color" placeholder="negro" value="{{ old('color') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="brand" class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="brand" name="brand" placeholder="Chevrolet" value="{{ old('brand') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Tipo</label>
            <div class="col-sm-10">
                <select name="type" id="type" class="form-control">
                    <option value="">Seleccione un tipo</option>
                    <option value="Particular">Particular</option>
                    <option value="Publico">Publico</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="fk_owner" class="col-sm-2 col-form-label">Propietario</label>
            <div class="col-sm-10">
                <select name="fk_owner" id="fk_owner" class="form-control">
                    <option value="">Seleccione un propietario</option>
                        @foreach($owners as $owner)
                            <option value="{{ $owner->identification }}">{{ $owner->last_name }} {{ $owner->first_name }} {{ $owner->second_name }}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="fk_driver" class="col-sm-2 col-form-label">Conductor</label>
            <div class="col-sm-10">
                <select name="fk_driver" id="fk_driver" class="form-control">
                    <option value="">Seleccione un conductor</option>
                        @foreach($drivers as $driver)
                            <option value="{{ $driver->identification }}">{{ $driver->last_name }} {{ $driver->first_name }} {{ $driver->second_name }}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection