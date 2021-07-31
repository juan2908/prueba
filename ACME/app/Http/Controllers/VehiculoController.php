<?php

namespace App\Http\Controllers;

use App\Models\TipoVehi;
use App\Models\Conductor;
use App\Models\vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = vehiculo::all();


        return view('modulos.vehiculos.index', compact('vehiculos'));
    }

    public function show($id)
    {
        $vehiculos = vehiculo::find($id);

        $conductores = Conductor::all();
        return view('modulos.vehiculos.mostrar', compact('vehiculos','conductores'));
    }

    public function create()
    {
         $vehiculi= vehiculo::all();

        return view('modulos.vehiculos.crear',compact('vehiculi'));
    }

    public function store (Request $request)
    {
        $vehiculos = vehiculo::create($request->all());
        return redirect()->route('vehiculos.index');
    }

    public function edit ($id)
    {
        $vehiculos = vehiculo::find($id);


        return view('modulos.vehiculos.editar', compact('vehiculos'));
    }

    public function update(Request $request, $id)
    {
        $vehiculos = vehiculo::find($id)->update($request->all());
        return redirect()->route('vehiculos.index');
    }

    public function delete($id)
    {
        $vehiculo = vehiculo::find($id)->delete();
        return redirect()->route('vehiculos.index');
    }
}
