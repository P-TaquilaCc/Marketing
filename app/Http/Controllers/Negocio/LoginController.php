<?php

namespace App\Http\Controllers\Negocio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Negocio;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function check(Request $request){

        //Validación de entradas
        $request->validate([
            'email'=>'required|string',
            'password'=>'required|string'
        ],[
            'email.required' => 'El correo electrónico es obligatorio',
            'password.required' => 'La contraseña es obligatorio'

        ]);

        if(Auth::guard('negocio')->attempt(['correo'=> $request->email,'password' => $request->password])){
            return redirect()->route('negocio.dashboard');
        }else{
            return redirect()->back()->with('fail','Credenciales incorrectas');
        }
    }

    function logout(){
        Auth::guard('negocio')->logout();
        return redirect('/');
    }
}
