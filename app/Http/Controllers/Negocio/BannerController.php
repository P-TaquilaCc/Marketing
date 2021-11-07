<?php

namespace App\Http\Controllers\Negocio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;

class BannerController extends Controller
{
    public function list(){
        $banners= Banner::orderby('id','desc')->paginate(8);
        return view('negocio.banners.list', compact('banners'));
    }

    public function create(){
        return view('negocio.banners.add');
    }

    public function add(Request $request){

        $input = $request->all();
        $banner = new Banner();

        if($request->hasFile('imagen')){
            $input['imagen']=$request->file('imagen')->store('uploads/banners','public');
        }

        $banner->imagen = $input['imagen'];
        $banner->estado = $input['estado'];

        $banner->save();

        return redirect()->route('negocio.banner.index')
        ->with('success','Banner creado con éxito');

    }

    public function edit(){
        return view('negocio.banners.edit');
    }

    public function update(){

    }

    public function delete(){

    }
}
