@extends('layouts.admin.app')

@section('content')

    <div class="container">

        <form action="{{ route('vehiculos.guardar') }}" method="POST" class="bg-white p-3 rounded-lg">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa">
                </div>
                <div class="form-group col-md-6">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca">
                </div>
                <div>
                    <select name="tipo_de_veiculo" id="tipo_de_veiculo" class="form-select my-3 form-control"
                            aria-label="selecione tipo de veiculo">
                        <option value=" ">selecione tipo de veiculo</option>
                        <option value="publico">publico</option>
                        <option value="particular">particular</option>

                    </select>
                    @if($errors->has('tipo_de_veiculo'))
                        <label for="" style="color:red;">{{ $errors->first('tipo_de_veiculo') }}</label>
                        <br>
                    @endif
                </div>
            <hr>
            <a href="{{ route('vehiculos.index') }}" class="btn btn-check mr-2"><i class="fas fa-arrow-circle-left"></i>
                &nbsp; VOLVER</a>
            <button type="submit" class="btn btn-add ml-2">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></button>


    </div>

@endsection
