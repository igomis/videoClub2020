<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credenciales = $request->only('email', 'password');
        if (Auth::attempt($credenciales))
        {
            // Autenticación exitosa
            return redirect()->intended(route('movie.index'));
        } else {
            $error = 'Usuario incorrecto';
            return view('login', compact('error'));
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
