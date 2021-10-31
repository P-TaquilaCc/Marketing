<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Plan;

class PlanController extends Controller
{
    public function list(){
        $planes= Plan::paginate(10);
        return view('admin.planes.list', compact('planes'));
    }

    public function planadd(){
        return view('admin.planes.add');
    }

    public function add(){

    }

    public function planedit(){
        return view('admin.planes.edit');
    }

    public function update(){

    }

    public function delete(){

    }

}
