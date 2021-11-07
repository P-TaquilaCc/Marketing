@extends('layouts.negocio')
@section('content')
    <style>
        .custom-file-label::after { content: "Subir";}
    </style>

    <h3 style="color: #000; margin-top: 40px">Agregar Categorías</h3><hr>

    <form  action="{{ route('negocio.categoria.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="card py-3 m-b-15">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre" class="form-label" > Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" tabindex ="1">
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
                    <button type="submit" class="btn-2 btn-primary">Guardar</button>
                </div>
            </div>

      </form>
@endsection

