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
}
