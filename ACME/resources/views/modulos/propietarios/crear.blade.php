@extends('layouts.admin.app')

@section('content')

    <div class="container">

        <form action="{{ route('propietarios.guardar') }}" method="POST" class="bg-white p-3 rounded-lg">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="numero_de_cedula">Numero de cedula</label>
                    <input type="number" class="form-control" id="numero_de_cedula" name="numero_de_cedula">
                </div>
                <div class="form-group col-md-6">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="primer_nombre">Primer Nombre</label>
                    <input type="text" class="form-control" id="primer_nombre" name="primer_nombre">
                </div>
                <div class="form-group col-md-4">
                    <label for="segundo_nombre">Segundo Nombre</label>
                    <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre">
                </div>
                <div class="form-group col-md-4">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion">
                </div>
                <div class="form-group col-md-6">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                </div>
            </div>

            <hr>
            <a href="{{ route('conductores.index') }}" class="btn btn-check mr-2"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
            <button type="submit" class="btn btn-add ml-2">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></button>
        </form>

    </div>

@endsection

