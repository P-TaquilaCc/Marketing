@extends('layouts.negocio')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Administrar Categorías</h3><hr>

    <div class="text-right" >
        <a href="{{ route('negocio.categoryadd') }}" class="btn btn-primary">Agregar Nuevo</a>
    </div>

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
                <tr>
                    <td>{{ $categoria-> nombre }}</td>
                    <td class="text-center">{{ $categoria-> imagen }}</td>

                    <td class="text-center">
                        <a type="button" href="{{ route('negocio.categoryedit') }}" class="btn btn-success" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen"></i></a>
                        <a type="button" class="btn btn-danger" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <span>  {{ $categoria_productos->links() }} </span>
@endsection

