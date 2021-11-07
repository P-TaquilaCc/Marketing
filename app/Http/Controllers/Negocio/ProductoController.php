<?php

namespace App\Http\Controllers\Negocio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\CategoriaProducto;

class ProductoController extends Controller
{
    public function list(){

        $productos = Producto::orderby('id','desc')->paginate(8);
        return view('negocio.productos.list', compact('productos'));

    }

    public function create(){

        $categorias = CategoriaProducto::get();
        return view('negocio.productos.add', compact('categorias'));

    }

    public function add(Request $request){

        $input = $request->all();
        $producto = new Producto();

        $producto->idCategoria = $input['categoria'];
        $producto->nombre = $input['nombre'];
        $producto->descripcion = $input['descripcion'];
        $producto->precio = $input['precio'];

        if($request->hasFile('imagen')){
            $input['imagen']=$request->file('imagen')->store('uploads/productos','public');
        }

        $producto->imagen = $input['imagen'];
        $producto->estado = $input['estado'];

        $producto->save();

        return redirect()->route('negocio.producto.index')
        ->with('success','Producto creado con éxito');

        /*$datos = request()->all();
        return response()->json($datos);*/
    }

    public function edit(){
        return view('negocio.productos.edit');
    }

    public function update(){

    }

    public function delete(){

    }
}

