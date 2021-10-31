<?php

namespace App\Http\Controllers\Negocio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cupon;


class CuponController extends Controller
{
    public function list(){
        $cupones= Cupon::paginate(10);
        return view('negocio.cupones.list', compact('cupones'));
    }

    public function cuponadd(){
        return view('negocio.cupones.add');
    }

    public function add(){

    }

    public function cuponedit(){
        return view('negocio.cupones.edit');
    }

    public function update(){

    }

    public function delete(){

    }
}
