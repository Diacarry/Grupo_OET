@extends('layouts.blank')
@section('title')
    Registro Conductor
@endsection
@section('content')
    <br>
    @if (Route::has('login'))
        <div class="text-right">
            @auth
                <a href="{{ route('drivers') }}" class="btn btn-outline-danger">Atras</a>
                <a href="{{ url('/home') }}" class="btn btn-outline-secondary">Cuenta</a>
            @endauth
        </div>
    @endif
    <h2>Registrar un nuevo conductor</h2>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/drivers" method="POST">
        @csrf
        <div class="form-group row">
            <label for="identification" class="col-sm-2 col-form-label">Numero de cedula</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="identification" name="identification" placeholder="example@company.com" value="{{ old('identification') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">Primer nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Diego" value="{{ old('first_name') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="second_name" class="col-sm-2 col-form-label">Segundo Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="second_name" name="second_name" placeholder="Andrés" value="{{ old('second_name') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="last_name" class="col-sm-2 col-form-label">Apellidos</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Carranza Rivera" value="{{ old('last_name') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Direccion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="address" name="address" placeholder="Calle 13 con 68" value="{{ old('address') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Telefono de contacto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="+57 3214916403" value="{{ old('phone') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="city" class="col-sm-2 col-form-label">Ciudad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="city" name="city" placeholder="Mosquera" value="{{ old('city') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection