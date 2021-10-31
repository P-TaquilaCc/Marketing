<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pedido;


class PedidoController extends Controller
{
    public function list(){
        $pedidos= Pedido::paginate(10);
        return view('admin.pedidos.list', compact('pedidos'));
    }

    public function viewdetail(){

    }

}
