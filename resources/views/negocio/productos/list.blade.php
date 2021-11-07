@extends('layouts.negocio')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Administrar Productos</h3><hr>

    <div class="text-right" >
        <a href="{{ route('negocio.producto.create') }}" class="btn btn-primary">Agregar Nuevo</a>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p> {{ $message }}</p>
        </div>
    @endif

    <table class = "table table-striped table-responsive-md" style="margin-top: 40px; border-collapse: collapse">
        <thead>
            <tr style="font-weight: bold;" class="text-center">
                <td>Imagen</td>
                <td>Categoría</td>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Estado</td>
                <td>Controles</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr class="text-center">
                    <td>
                        <img class="img-responsive" src="{{ asset('storage').'/'. $producto->imagen }}" width="100" height="80" alt="Imagen Producto">

                    </td>
                    <td>{{ $producto->category->nombre}}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>S/. {{ number_format($producto->precio,2) }}</td>
                    <td>
                        @if ($producto->estado == 1)
                            <p class="btn btn-sm m-b-15 ml-2 mr-2 btn-success">Activo</p>
                        @else
                            <p class="btn btn-sm m-b-15 ml-2 mr-2 btn-danger">Inactivo</p>
                        @endif
                    </td>

                    <td class="text-center">
                        <a type="button" href="{{ route('negocio.producto.edit') }}" class="btn btn-success" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen"></i></a>
                        <a type="button" class="btn btn-danger" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <span>  {{ $productos->links() }} </span>
@endsection

