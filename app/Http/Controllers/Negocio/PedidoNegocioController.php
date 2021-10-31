<?php

namespace App\Http\Controllers\Negocio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pedido;

class PedidoNegocioController extends Controller
{
    public function list(){
        $pedidos= Pedido::paginate(10);
        return view('negocio.pedidos.list', compact('pedidos'));
    }

    public function viewdetail(){

    }
}
