@extends('layouts.negocio')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Administrar Banners</h3><hr>

    <div class="text-right" >
        <a href="{{ route('negocio.banner.create') }}" class="btn btn-primary">Agregar Nuevo</a>
    </div>


    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p> {{ $message }}</p>
        </div>
    @endif

    <table class = "table table-striped table-responsive-md" style="margin-top: 40px; border-collapse: collapse">
        <thead>
            <tr style="font-weight: bold;" class="text-center">
                <td style="width:300px">Imagen</td>
                <td>Estado</td>
                <td>Controles</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr class="text-center">
                    <td>
                        <img class="img-responsive" src="{{ asset('storage').'/'. $banner-> imagen }}" width="100" height="80" alt="Imagen Banner">
                    </td>
                    <td class="text-center">
                        @if ($banner-> estado == 1)
                            <p class="btn btn-sm m-b-15 ml-2 mr-2 btn-success">Activo</p>
                        @else
                            <p class="btn btn-sm m-b-15 ml-2 mr-2 btn-danger">Inactivo</p>
                        @endif
                    </td>

                    <td class="text-center">
                        <a type="button" href="{{ route('negocio.banner.edit') }}" class="btn btn-success" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen"></i></a>
                        <a type="button" class="btn btn-danger" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <span>  {{ $banners->links() }} </span>
@endsection

