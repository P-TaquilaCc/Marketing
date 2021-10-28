<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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

        if(Auth::guard('admin')->attempt(['correo'=> $request->email,'password' => $request->password])){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login')->with('fail','Credenciales incorrectas');
        }
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

}
