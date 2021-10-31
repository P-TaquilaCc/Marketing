@extends('layouts.negocio')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Administrar Cupones</h3><hr>

    <div class="text-right" >
        <a href="{{ route('negocio.cuponadd') }}" class="btn btn-primary">Agregar Nuevo</a>
    </div>

    <table class = "table table-striped table-responsive-md" style="margin-top: 40px; border-collapse: collapse">
        <thead>
            <tr style="font-weight: bold;" class="text-center">
                <td>Código</td>
                <td>Descuento</td>
                <td>Fecha Inicio</td>
                <td>Fecha Final</td>
                <td>Estado</td>
                <td>Controles</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($cupones as $cupon)
                <tr>
                    <td>{{ $cupon-> nombre }}</td>
                    <td>{{ $cupon-> imagen }}</td>

                    <td class="text-center">
                        <a type="button" href="{{ route('negocio.cuponedit') }}" class="btn btn-success" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen"></i></a>
                        <a type="button" class="btn btn-danger" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <span>  {{ $cupones->links() }} </span>
@endsection

