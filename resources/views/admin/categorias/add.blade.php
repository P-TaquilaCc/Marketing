@extends('layouts.admin')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Agregar Categorías</h3><hr>

    <form>
        @csrf
            <div class="card py-3 m-b-15">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="form-label" > Nombres</label>
                            <input type="" id="nombres" name="nombre" type="text" class="form-control" tabindex ="1">
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

