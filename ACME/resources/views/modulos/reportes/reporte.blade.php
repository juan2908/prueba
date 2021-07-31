@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="m-3 bck-tab">
            <div class="table-responsive">
                <div class="pt-3 pl-3 pr-3">
                    <h3><b>Reporte</b></h3>
                </div>
                <div class="p-3">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>PLACA</th>
                            <th>MARCA</th>
                            <th>CONDUCTOR</th>
                            <th>PROPIETARIO</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vehiculos as $vh)
                            <tr>
                                <td>{{ $vh -> placa }}</a></td>
                                <td>{{ $vh -> marca }}</td>

                                @foreach($conductores as $usu)
                                    @if($vh->$conductores == $usu->id)
                                        <td>{{ $usu -> primerNombre }} {{ $usu -> apellidos }}</td>
                                    @endif
                                @endforeach

                                @foreach($propietarios as $usu)
                                    @if($vh->$propietarios == $usu->id)
                                        <td>{{ $usu -> primerNombre }} {{ $usu -> apellidos }}</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

