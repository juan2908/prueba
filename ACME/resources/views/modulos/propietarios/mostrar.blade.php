@extends('layouts.admin.app')

@section('content')

    <div class="container">

        <div class="bg-white p-3 rounded-lg">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="numero_de_cedula">Numero de cedula</label>
                    <input type="number" class="form-control" id="numero_de_cedula" name="numero_de_cedula" value="{{ $propietarios -> numero_de_cedula }}" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $propietarios -> ciudad }}" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="primer_nombre">Primer Nombre</label>
                    <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" value="{{ $propietarios -> primer_nombre }}" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="segundo_nombre">Segundo Nombre</label>
                    <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" value="{{ $propietarios -> segundo_nombre }}" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $propietarios -> apellidos }}" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $propietarios -> direccion }}" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $propietarios -> telefono }}" disabled>
                </div>
            </div>

            <hr>
            <a href="{{ route('propietarios.index') }}" class="btn btn-check mr-2"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
            <a href="{{ route('propietarios.edit', $propietarios -> id) }}" class="btn btn-edit ml-2">EDITAR &nbsp; <i class="fas fa-pen"></i></a>
        </div>

    </div>

@endsection
