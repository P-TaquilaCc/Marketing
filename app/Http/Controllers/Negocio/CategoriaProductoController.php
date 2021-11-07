<?php

namespace App\Http\Controllers\Negocio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CategoriaProducto;

class CategoriaProductoController extends Controller
{
    public function list(){
        $categoria_productos= CategoriaProducto::orderby('id','desc')->paginate(8);
        return view('negocio.categorias.list', compact('categoria_productos'));
    }

    public function create(){
        return view('negocio.categorias.add');
    }

    public function add(Request $request){



        /*$datos = $request->except('_token');

        if($request->hasFile('imagen')){
            $datos['imagen']=$request->file('imagen')->store('uploads','public');
        }

        CategoriaProducto::insert($datos);
        return response()->json($datos);*/

        $input = $request->all();
        $categoria_producto = new CategoriaProducto();

        $categoria_producto->nombre = $input['nombre'];

        if($request->hasFile('imagen')){
            $input['imagen']=$request->file('imagen')->store('uploads/categoriaProducto','public');
        }

        $categoria_producto->imagen = $input['imagen'];

        $categoria_producto->save();

        return redirect()->route('negocio.categoria.index')
        ->with('success','Categoría creada con éxito');

        /*$datos = request()->all();
        return response()->json($input);*/
    }

    public function edit(){
        return view('negocio.categorias.edit');
    }

    public function update(){

    }

    public function delete(){

    }
}
