<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\gimnasio;

class userController extends Controller
{
    public function perfil(REQUEST $reuest)  {
        $u = session('usuario');
        $gimnasio = gimnasio::first();
         if (session() && $u != null) {
            return view('perfil.inicio', compact('u','gimnasio'));
        }else {
            return redirect()->route('inicio');
        }
    }

    function cambiarAvatar(REQUEST $request)  {
        $u = User::find(session('usuario.id'));
        $u->avatar = $request->inputAvatar;
        $u->save();
        session()->forget('usuario');
        session(['usuario' => $u]);

        return redirect()->route('perfil.inicio')->with('exito', 'Tu avatar se actualizo');
    }

    function cambiarInformacion(REQUEST $request) {
        $u = User::find(session('usuario.id'));
        $u->name = $request->inputName;
        $u->email = $request->inputEmail;
        $u->telefono = $request->inputTelefono;
        $u->save();
        session()->forget('usuario');
        session(['usuario' => $u]);
        return redirect()->route('perfil.inicio')->with('exito', 'Tu infromación se actualizo');

    }
}
