@extends('layouts.negocio')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Agregar Productos</h3><hr>

    <form  action="{{ route('negocio.producto.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="card py-3 m-b-15">
                <div class="card-body">

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="" class="form-label" > Categoría</label>
                            <select name="categoria" class="form-control">
                                <option selected disabled>Seleccione una categoría</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}" >{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="" class="form-label" > Nombre</label>
                            <input type="" id="nombre" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="" class="form-label" > Descripción</label>
                            <textarea name="descripcion" class="form-control" name="" id="" cols="50" rows="4"></textarea>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="" class="form-label" > Precio</label>
                            <input name="precio" id="nombres" type="text" class="form-control" tabindex ="1">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="" class="form-label" > Estado</label>
                            <select class="form-control" name="estado">
                                <option selected disabled>Seleccione una opción</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="imagen" class="form-label" > Imagen</label>
                            <input type="file"  name="imagen">
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <button type="submit" class="btn-2 btn-primary" id="btnAgregar">Guardar</button>

                </div>
            </div>

      </form>

@endsection

