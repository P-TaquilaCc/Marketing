<?php

namespace App\Http\Controllers\Negocio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;

class BannerController extends Controller
{
    public function list(){
        $banners= Banner::paginate(10);
        return view('negocio.banners.list', compact('banners'));
    }

    public function banneradd(){
        return view('negocio.banners.add');
    }

    public function add(){

    }

    public function banneredit(){
        return view('negocio.banners.edit');
    }

    public function update(){

    }

    public function delete(){

    }
}
