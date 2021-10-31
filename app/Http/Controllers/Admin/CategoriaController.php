<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CategoriaNegocio;

class CategoriaController extends Controller
{
    public function list(){
        $categoria_negocios= CategoriaNegocio::paginate(10);
        return view('admin.categorias.list', compact('categoria_negocios'));
    }

    public function categoryadd(){
        return view('admin.categorias.add');
    }

    public function add(){

    }

    public function categoryedit(){
        return view('admin.categorias.edit');
    }

    public function update(){

    }

    public function delete(){

    }
}
