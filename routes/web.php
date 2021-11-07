<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\NegocioController;
use App\Http\Controllers\Admin\PedidoController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\ReporteController;

use App\Http\Controllers\Negocio\LoginController;
use App\Http\Controllers\Negocio\BannerController;
use App\Http\Controllers\Negocio\CategoriaProductoController;
use App\Http\Controllers\Negocio\CuponController;
use App\Http\Controllers\Negocio\ProductoController;
use App\Http\Controllers\Negocio\PedidoNegocioController;


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

        Route::view('/dashboard','admin.dashboard')->name('dashboard');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');

        //Categorias
        Route::get('/categorias/list', [CategoriaController::class,'list'])->name('listCategory');
        Route::get('/categorias/add', [CategoriaController::class,'categoryadd'])->name('categoryadd');
        Route::get('/categorias/edit', [CategoriaController::class,'categoryedit'])->name('categoryedit');

        //Negocios
        Route::get('/negocios/list', [NegocioController::class,'list'])->name('listBusiness');
        Route::get('/negocios/add', [NegocioController::class,'businessadd'])->name('businessadd');
        Route::get('/negocios/edit', [NegocioController::class,'businessedit'])->name('businessedit');

        //Pedidos
        Route::get('/pedidos/list', [PedidoController::class,'list'])->name('listOrder');
        Route::get('/pedidos/details', [PedidoController::class,'viewdetail'])->name('viewdetail');


        //Planes
        Route::get('/planes/list', [PlanController::class,'list'])->name('listPlan');
        Route::get('/planes/add', [PlanController::class,'planadd'])->name('planadd');
        Route::get('/planes/edit', [PlanController::class,'planedit'])->name('planedit');

        //Reporte
        Route::get('/reportes', [ReporteController::class,'generateReport'])->name('generateReport');

    });
});


Route::prefix('/')->name('negocio.')->group(function(){

    Route::middleware(['guest:negocio','PreventBackHistory'])->group(function(){
          Route::view('/','welcome')->name('login');
          Route::post('/check',[LoginController::class,'check'])->name('check');
    });

    Route::middleware(['auth:negocio','PreventBackHistory'])->group(function(){

        Route::view('/dashboard','negocio.dashboard')->name('dashboard');
        Route::post('/logout',[LoginController::class,'logout'])->name('logout');

          //Categorias de Productos
          Route::get('/categorias/list', [CategoriaProductoController::class,'list'])->name('categoria.index');
          Route::get('/categorias/create', [CategoriaProductoController::class,'create'])->name('categoria.create');
          Route::get('/categorias/edit', [CategoriaProductoController::class,'edit'])->name('categoria.edit');

          Route::post('/categorias/addcategoria', [CategoriaProductoController::class,'add'])->name('categoria.add');

          //Productos
          Route::get('/productos/list', [ProductoController::class,'list'])->name('producto.index');
          Route::get('/productos/create', [ProductoController::class,'create'])->name('producto.create');
          Route::get('/productos/edit', [ProductoController::class,'edit'])->name('producto.edit');

          Route::post('/productos/addproducto', [ProductoController::class,'add'])->name('producto.add');

          //Pedidos
          Route::get('/pedidos/list', [PedidoNegocioController::class,'list'])->name('listOrder');
          Route::get('/pedidos/details', [PedidoNegocioController::class,'viewdetail'])->name('viewdetail');


          //Cupones
          Route::get('/cupones/list', [CuponController::class,'list'])->name('cupon.index');
          Route::get('/cupones/create', [CuponController::class,'create'])->name('cupon.create');
          Route::get('/cupones/edit', [CuponController::class,'edit'])->name('cupon.edit');

          Route::post('/cupones/addcupon', [CuponController::class,'add'])->name('cupon.add');

          //Banners
          Route::get('/banners/list', [BannerController::class,'list'])->name('banner.index');
          Route::get('/banners/create', [BannerController::class,'create'])->name('banner.create');
          Route::get('/banners/edit', [BannerController::class,'edit'])->name('banner.edit');

          Route::post('/banners/addbanner', [BannerController::class,'add'])->name('banner.add');



    });
});

