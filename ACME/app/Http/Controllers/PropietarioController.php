<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use App\Models\Conductor;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index()
    {
        $conductores = Conductor::all();
        $propietarios = Propietario::all();
        return view('modulos.propietarios.index', compact('conductores', 'propietarios'));
    }

    public function create()
    {
        $conductores = Conductor::all();
        $propietarios = Propietario::all();
        return view('modulos.propietarios.crear', compact('propietarios'));
    }

    public function store(Request $request)
    {
        $usuarios = Conductor::create($request->all());
        return redirect()->route('propietarios.index');
    }

    public function edit($id)
    {
        $conductores = Conductor::find($id);
        $propietarios = Propietario::all();
        return view('modulos.propietarios.editar', compact('conductores', 'propietarios'));
    }

    public function update(Request $request, $id)
    {
        $conductores = Conductor::find($id)->update($request->all());
        return redirect()->route('propietarios.mostrar', $id);
    }

    public function show($id)
    {
        $conductores = Conductor::find($id);
        $propietarios = Propietario::all();
        return view('modulos.propietarios.mostrar', compact('conductores', 'propietarios'));
    }

    public function delete($id)
    {
        $conductores = Conductor::find($id)->delete();
        return redirect()->route('propietarios.index');
    }
}
