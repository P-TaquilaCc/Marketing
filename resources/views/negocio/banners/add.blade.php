@extends('layouts.negocio')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Agregar Banners</h3><hr>

    <form  action="{{ route('negocio.banner.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="card py-3 m-b-15">
                <div class="card-body">

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="imagen" class="form-label" > Imagen</label>
                            <input type="file"  name="imagen">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="" class="form-label" > Estado</label>
                            <select class="form-control" name="estado">
                                <option value="" selected disabled="">Seleccione una opción</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
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

