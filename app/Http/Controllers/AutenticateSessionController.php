<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AutenticateSessionController extends Controller
{
    public function store(Request $Request){
        $credentials = $Request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);
        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

        $Request->session()->regenerate();
        //Redireccion a la vista a la que queremos ingresar despues del logearnos
        return redirect()->intended();

    }
}
