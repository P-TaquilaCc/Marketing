<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\NegocioController;
use App\Http\Controllers\Admin\PedidoController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\ReporteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/','admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','admin.dashboard')->name('dashboard');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');

        //Categorias
        Route::get('/categorias/list', [CategoriaController::class,'list'])->name('listCategory');
        Route::get('/categorias/add', [CategoriaController::class,'add'])->name('add');
        Route::get('/categorias/edit', [CategoriaController::class,'update'])->name('update');

        //Negocios
        /*Route::get('/negocios/list', [NegocioController::class,'list'])->name('list');
        Route::get('/negocios/add', [NegocioController::class,'add'])->name('add');
        Route::get('/negocios/edit', [NegocioController::class,'update'])->name('update');

        //Pedidos
        Route::get('/pedidos/list', [PedidoController::class,'list'])->name('list');
        Route::get('/pedidos/add', [PedidoController::class,'add'])->name('add');
        Route::get('/pedidos/edit', [PedidoController::class,'update'])->name('update');

        //Planes
        Route::get('/planes/list', [PlanController::class,'list'])->name('list');
        Route::get('/planes/add', [PlanController::class,'add'])->name('add');
        Route::get('/planes/edit', [PlanController::class,'update'])->name('update');

        //Reporte
        Route::get('/reportes', [ReporteController::class,'generateReport'])->name('generateReport');*/

    });
});
