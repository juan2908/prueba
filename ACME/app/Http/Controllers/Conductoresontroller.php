<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use App\Models\Propietario;
use Illuminate\Http\Request;

class Conductoresontroller extends Controller
{
    public function index()
    {
        $conductores = Conductor::all();
        $propietarios = Propietario::all();
        return view('modulos.conductores.index', compact('conductores', 'propietarios'));
    }

    public function create()
    {
        $conductores = Conductor::all();
        $propietarios = Propietario::all();
        return view('modulos.conductores.crear', compact('propietarios'));
    }

    public function store(Request $request)
    {
        $usuarios = Conductor::create($request->all());
        return redirect()->route('conductores.index');
    }

    public function edit($id)
    {
        $conductores = Conductor::find($id);
        $propietarios = Propietario::all();
        return view('modulos.conductores.editar', compact('conductores', 'propietarios'));
    }

    public function update(Request $request, $id)
    {
        $conductores = Conductor::find($id)->update($request->all());
        return redirect()->route('conductores.mostrar', $id);
    }

    public function show($id)
    {
        $conductores = Conductor::find($id);
        $propietarios = Propietario::all();
        return view('modulos.conductores.mostrar', compact('conductores', 'propietarios'));
    }

    public function delete($id)
    {
        $conductores = Conductor::find($id)->delete();
        return redirect()->route('conductores.index');
    }
}
