<?php

namespace App\Http\Controllers\Negocio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CategoriaProducto;

class CategoriaProductoController extends Controller
{
    public function list(){
        $categoria_productos= CategoriaProducto::paginate(10);
        return view('negocio.categorias.list', compact('categoria_productos'));
    }

    public function categoryadd(){
        return view('negocio.categorias.add');
    }

    public function add(){

    }

    public function categoryedit(){
        return view('negocio.categorias.edit');
    }

    public function update(){

    }

    public function delete(){

    }
}
