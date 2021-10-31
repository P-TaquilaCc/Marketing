@extends('layouts.negocio')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Agregar Cupones</h3><hr>

    <form>
        @csrf
            <div class="card py-3 m-b-15">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="" class="form-label" > Código del cupón</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="" class="form-label" > Porcentaje del Descuento</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="" class="form-label" > Fecha Inicio</label>
                            <input id="fecha_inicio" type="date" name="fecha_inicio" class="form-control text-center">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="" class="form-label" > Fecha Final</label>
                            <input id="fecha_inicio" type="date" name="fecha_inicio" class="form-control text-center">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="" class="form-label" > Estado</label>
                            <select class="form-control">
                                <option selected="">Activo</option>
                            </select>
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

