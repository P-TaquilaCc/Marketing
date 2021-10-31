<?php

namespace App\Http\Controllers\Negocio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function list(){
        $productos = Producto::paginate(10);
        return view('negocio.productos.list', compact('productos'));
    }

    public function productadd(){
        return view('negocio.productos.add');
    }

    public function add(){

    }

    public function productedit(){
        return view('negocio.productos.edit');
    }

    public function update(){

    }

    public function delete(){

    }
}

