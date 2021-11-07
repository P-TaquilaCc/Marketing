@extends('layouts.negocio')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Administrar Categorías</h3><hr>

    <div class="text-right" >
        <a href="{{ route('negocio.categoria.create') }}" class="btn btn-primary">Agregar Nuevo</a>
    </div>


    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p> {{ $message }}</p>
        </div>
    @endif


    <table class = "table table-striped table-responsive-md" style="margin-top: 40px; border-collapse: collapse">
        <thead>
            <tr style="font-weight: bold;" class="text-center">
                <td style="width:300px">Nombre</td>
                <td>Imagen</td>
                <td>Controles</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categoria_productos as $categoria)
                <tr class="text-center">
                    <td>{{ $categoria->nombre }}</td>
                    <td >
                        <img class="img-responsive" src="{{ asset('storage').'/'.$categoria->imagen }}" width="100" height="80" alt="Imagen Categoría">
                    </td>

                    <td>
                        <a type="button" href="{{ route('negocio.categoria.edit') }}" class="btn btn-success" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen"></i></a>
                        <a type="button" class="btn btn-danger" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <span>  {{ $categoria_productos->links() }} </span>
@endsection

