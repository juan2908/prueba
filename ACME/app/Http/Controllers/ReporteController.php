<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use App\Models\vehiculo;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function reporte(){

        $conductores=Conductor::all();
        $vehiculos=vehiculo::all();
        return view('modulos.reportes.reporte', compact('conductores', 'vehiculos'));

    }
}
