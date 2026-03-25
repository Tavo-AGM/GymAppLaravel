<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\gimnasio;

class loginController extends Controller
{
    public function inicio(REQUEST $request) {
        $gimnasio = gimnasio::first();
        $users = User::all();
        //dd($request);
        foreach ($users as $u) {
            if ($u->avatar == null) {
                $u->avatar = 'https://ui-avatars.com/api/?name='.$u->name.'&bold=truer&background=083D77&color=EBEBD3';
            }
        }
        return view('welcome', compact('users','gimnasio'));

    }

    public function iniciarSesion(Request $request) {
        $u = User::find($request->idUsuario);
        if ($u->avatar == null) {
            $u->avatar = 'https://ui-avatars.com/api/?name='.$u->name.'&bold=truer&background=083D77&color=EBEBD3';
        }
        if (Hash::check($request->passwordUsuario,$u->password)) {
            session($u->id);
            session(['usuario' => $u]);
            return redirect()->route('admin.inicio');
        }else {
            return redirect()->route('inicio')->with('error', 'Tu contraseña es incorrecta');
        }

    }

    public function cerrarSesion() {
        session()->flush();
        return redirect()->route('inicio');
    }
}
