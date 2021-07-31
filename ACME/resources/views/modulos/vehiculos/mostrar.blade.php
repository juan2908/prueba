@extends('layouts.admin.app')

@section('content')

    <div class="container">

        <div class="bg-white p-3 rounded-lg">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" value="{{ $vehiculos -> placa }}"
                           disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color" value="{{ $vehiculos -> color }}"
                           disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ $vehiculos -> marca }}"
                           disabled>
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
            </div>


            <hr>
            <a href="{{ route('vehiculos.index') }}" class="btn btn-check mr-2"><i class="fas fa-arrow-circle-left"></i>
                &nbsp; VOLVER</a>
            <a href="{{ route('vehiculos.edit', $vehiculos -> id) }}" class="btn btn-edit ml-2">EDITAR &nbsp; <i
                    class="fas fa-pen"></i></a>
        </div>

    </div>

@endsection

