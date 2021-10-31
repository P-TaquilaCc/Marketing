<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Negocio;

class NegocioController extends Controller
{
    public function list(){
        $negocios= Negocio::paginate(10);
        return view('admin.negocios.list', compact('negocios'));
    }

    public function businessadd(){
        return view('admin.negocios.add');
    }

    public function add(){

    }

    public function businessedit(){
        return view('admin.negocios.edit');
    }

    public function update(){

    }

    public function delete(){

    }
}
