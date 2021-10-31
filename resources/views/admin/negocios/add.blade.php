@extends('layouts.admin')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Agregar Negocios</h3><hr>

    <form>
        @csrf
            <div class="card py-3 m-b-15">

                <div class="col-md-6">
                    <h3>Planes</h3>
                </div>

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="" class="form-label" > Plan de uso mensual</label>
                            <select class="form-control">
                                <option selected="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="card py-3 m-b-15">

                <div class="col-md-6">
                    <h3>Datos Legales</h3>
                </div>

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipo" id="radio-empresa" value="0" required checked>
                                <label class="form-check-label" for="radio-empresa">Empresa</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipo" id="radio-emprendedor" value="1" required>
                                <label class="form-check-label" for="radio-emprendedor">Emprendedor</label>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > RUC</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Razón Social</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > DNI</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Representante Legal</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Foto del representante</label>

                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="card py-3 m-b-15">

                <div class="col-md-6">
                    <h3>Negocio</h3>
                </div>

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Nombre Comercial</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Correo electrónico</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Teléfono</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Categoría</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Dirección</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Estado</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
                        </div>
                    </div>

                </div>
            </div>

            <br>

            <div class="card py-3 m-b-15">

                <div class="col-md-6">
                    <h3>Ubicación</h3>
                </div>

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="" id="nombres" name="nombre" type="text" class="form-control"  placeholder="Ingrese una ubicación" tabindex ="1">
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

