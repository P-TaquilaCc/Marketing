@extends('layouts.admin')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Reportes</h3><hr>

    <div class="card-body">
        <form action="">
            <div class="form-row">
                <div class="form-group col-md-8 mx-auto">
                    <label for="">Periodo</label>
                    <div class="input-group">
                        <input id="fecha_inicio" type="date" name="fecha_inicio" class="form-control text-center">
                        <div class="input-group-prepend input-group-append">
                            <div class="input-group-text" style="background-color: #e9ecef;">a</div>
                        </div>
                        <input id="fecha_fin" type="date" name="fecha_fin" class="form-control text-center">
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Seleccionar Negocio</label>
                            <select class="form-control">
                                <option selected="">Todos</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <button type="button" class="btn-2 btn-success" id="btnAgregar">Generar Reporte</button>
                        </div>
                    </div>

                </div>
            </div>





        </form>
    </div>

@endsection

