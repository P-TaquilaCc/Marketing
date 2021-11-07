<?php

namespace App\Http\Controllers\Negocio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cupon;


class CuponController extends Controller
{
    public function list(){
        $cupones= Cupon::orderby('id','desc')->paginate(8);
        return view('negocio.cupones.list', compact('cupones'));
    }

    public function create(){
        return view('negocio.cupones.add');
    }

    public function add(Request $request){

        $input = $request->all();
        $cupon = new Cupon();

        $cupon->codigo = $input['codigo'];
        $cupon->porcentaje = $input['porcentaje'];
        $cupon->fechaInicio = $input['fecha_inicio'];
        $cupon->fechaFin = $input['fecha_fin'];
        $cupon->estado = $input['estado'];

        $cupon->save();

        return redirect()->route('negocio.cupon.index')
        ->with('success','Cupón creado con éxito');

        //return redirect()->route('negocio.cupones.list');

        /*$datos = request()->all();
        return response()->json($datos);*/
    }

    public function edit(){
        return view('negocio.cupones.edit');
    }

    public function update(){

    }

    public function delete(){

    }
}
