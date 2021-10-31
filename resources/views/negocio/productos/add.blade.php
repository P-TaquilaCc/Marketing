@extends('layouts.negocio')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Agregar Productos</h3><hr>

    <form>
        @csrf
            <div class="card py-3 m-b-15">
                <div class="card-body">

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="" class="form-label" > Categoría</label>
                            <select class="form-control">
                                <option selected="">Seleccione</option>
                            </select>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="" class="form-label" > Nombre</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="" class="form-label" > Descripción</label>
                            <textarea class="form-control" name="" id="" cols="50" rows="4"></textarea>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="" class="form-label" > Precio</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="" class="form-label" > Estado</label>
                            <select class="form-control">
                                <option selected="">Activo</option>
                            </select>
                        </div>
                    </div>





                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Imagen</label>

                        </div>
                    </div>

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <button type="button" class="btn-2 btn-primary" id="btnAgregar">Guardar</button>

                </div>
            </div>

      </form>

@endsection

