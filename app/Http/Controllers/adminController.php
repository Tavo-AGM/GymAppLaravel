<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gimnasio;
use App\Models\bloques;
use App\Models\User;

class adminController extends Controller
{
    function inicio(Request $request) {
        $u = session('usuario');
        $gimnasio = gimnasio::first();
        $bloques = bloques::all();
        if (session() && $u != null) {
            if ($u->rol == 'admin') {
                return view('admin.inicio', compact('u','gimnasio','bloques'));
            }
        }else {
             return redirect()->route('inicio');
        }
    }

    function cambiarGimnasio(Request $request) {
        $g = gimnasio::first();
        $g->nombre = $request->inputNombreGimnasio;
        $g->ubicacion = $request->inputUbicacionGimnasio;
        $g->telefono = $request->inputTelefonoGimnasio;
        $g->save();
        return redirect()->route('admin.inicio')->with('exito', 'La información del gimnasio se actualizo');
    }
}
