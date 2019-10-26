@extends('layouts.blank')
@section('title')
    Editar Propietario
@endsection
@section('content')
    <br>
    @if (Route::has('login'))
        <div class="text-right">
            @auth
                <a href="{{ route('owners') }}" class="btn btn-outline-danger">Atras</a>
                <a href="{{ url('/home') }}" class="btn btn-outline-secondary">Cuenta</a>
            @endauth
        </div>
    @endif
    <h2>Editar datos de propietario</h2>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/owners/{{ $data->identification }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="identification" class="col-sm-2 col-form-label">Identificacion del propietario</label>
            <div class="col-sm-10">
                <h3>{{ $data->identification }}</h3>
            </div>
        </div>
        <div class="form-group">
            <label for="first_name">Primer Nombre</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Diego" value="{{ $data->first_name }}">
        </div>
        <div class="form-group">
            <label for="second_name">Segundo Nombre</label>
            <input type="text" class="form-control" id="second_name" name="second_name" placeholder="Andrés" value="{{ $data->second_name }}">
        </div>
        <div class="form-group">
            <label for="last_name">Apellidos</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Carranza Rivera" value="{{ $data->last_name }}">
        </div>
        <div class="form-group">
            <label for="address">Direccion</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Calle 13 con 68" value="{{ $data->address }}">
        </div>
        <div class="form-group">
            <label for="phone">Telefono de contacto</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="+57 3214916403" value="{{ $data->phone }}">
        </div>
        <div class="form-group">
            <label for="city">Ciudad</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Mosquera" value="{{ $data->city }}">
        </div>
        <button type="submit" class="btn btn-success">Modificar</button>
    </form>
@endsection