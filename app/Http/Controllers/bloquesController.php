<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\gimnasio;
use App\Models\bloques;
use Illuminate\Http\Request;

class bloquesController extends Controller
{
    function entrada() {
        $gimnasio = gimnasio::first();
        $bloques = bloques::all();
        return view('bloques.entrada', compact('gimnasio','bloques'));
    }
    function tienda() {
        $gimnasio = gimnasio::first();
        $bloques = bloques::all();
        return view('bloques.tienda', compact('gimnasio','bloques'));
    }
    function inventario() {
        $gimnasio = gimnasio::first();
        $bloques = bloques::all();
        return view('bloques.inventario', compact('gimnasio','bloques'));
    }
    function socios() {
        $gimnasio = gimnasio::first();
        $bloques = bloques::all();
        return view('bloques.socios', compact('gimnasio','bloques'));
    }
    function historial() {
        $gimnasio = gimnasio::first();
        $bloques = bloques::all();
        return view('bloques.historial', compact('gimnasio','bloques'));
    }
    function reportes() {
        $gimnasio = gimnasio::first();
        $bloques = bloques::all();
        return view('bloques.reportes', compact('gimnasio','bloques'));
    }
    function membresias() {
        $gimnasio = gimnasio::first();
        $bloques = bloques::all();
        return view('bloques.membresias', compact('gimnasio','bloques'));
    }
}
