@extends('layouts.admin.app')

@section('content')

    <div class="container">

        <div class="bg-white p-3 rounded-lg">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="numeroCedula">Numero de cedula</label>
                    <input type="number" class="form-control" id="numeroCedula" name="numeroCedula" value="{{ $conductores -> numeroCedula }}" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $conductores -> ciudad }}" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="primerNombre">Primer Nombre</label>
                    <input type="text" class="form-control" id="primerNombre" name="primerNombre" value="{{ $conductores -> primerNombre }}" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="segundoNombre">Segundo Nombre</label>
                    <input type="text" class="form-control" id="segundoNombre" name="segundoNombre" value="{{ $conductores -> segundoNombre }}" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $conductores -> apellidos }}" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $conductores -> direccion }}" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $conductores -> telefono }}" disabled>
                </div>
            </div>

            <hr>
            <a href="{{ route('conductores.index') }}" class="btn btn-check mr-2"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
            <a href="{{ route('conductores.edit', $conductores -> id) }}" class="btn btn-edit ml-2">EDITAR &nbsp; <i class="fas fa-pen"></i></a>
        </div>

    </div>

@endsection
