@extends('layouts.admin.app')

@section('content')

    <div class="container">

        <form action="{{ route('conductores.update', $conductores -> id) }}" method="POST" class="bg-white p-3 rounded-lg">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="numeroCedula">Numero de cedula</label>
                    <input type="number" class="form-control" id="numeroCedula" name="numeroCedula" value="{{ $conductores -> numeroCedula }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $conductores -> ciudad }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="primerNombre">Primer Nombre</label>
                    <input type="text" class="form-control" id="primerNombre" name="primerNombre" value="{{ $conductores -> primerNombre }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="segundoNombre">Segundo Nombre</label>
                    <input type="text" class="form-control" id="segundoNombre" name="segundoNombre" value="{{ $conductores -> segundoNombre }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $conductores -> apellidos }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $conductores -> direccion }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $conductores -> telefono }}">
                </div>
            </div>

            <hr>
            <a href="{{ route('conductores.index') }}" class="btn btn-check mr-2"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
            <button type="submit" class="btn btn-add ml-2">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></button>
        </form>

    </div>

@endsection
