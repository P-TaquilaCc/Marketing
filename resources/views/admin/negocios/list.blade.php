@extends('layouts.admin')
@section('content')

    <h3 style="color: #000; margin-top: 40px">Administrar Negocios</h3><hr>

    <div class="text-right" >
        <a href="{{ route('admin.businessadd') }}" class="btn btn-primary">Agregar Nuevo</a>
    </div>

    <table class = "table table-striped table-responsive-md" style="margin-top: 40px; border-collapse: collapse">
        <thead>
            <tr style="font-weight: bold; text-align: center">
                <td>Imagen</td>
                <td>Nombre</td>
                <td>Teléfono</td>
                <td>Correo electrónico</td>
                <td>Horario</td>
                <td>Estado</td>
                <td>Controles</td>
            </tr>
        </thead>
        <tbody>
            {{--@foreach ($Affiliates as $Affiliate)
                <tr  style="text-align: center">
                    <td>{{ $Affiliate -> DNI }}</td>
                    <td>{{ $Affiliate -> nombre }}</td>
                    <td>{{ $Affiliate -> apellido }}</td>
                    <td>{{ $Affiliate -> FechaNac}}</td>
                    @php
                        if($Affiliate -> EstadoCivil == '1'){
                            echo ' <td> soltero </td>';
                        }else if($Affiliate -> EstadoCivil == '2'){
                            echo ' <td> casado </td>';
                        }else if($Affiliate -> EstadoCivil == '3'){
                            echo ' <td> divorciado </td>';
                        }else{
                            echo ' <td> conviviente </td>';
                        }

                        if( $Affiliate -> sexo == '0'){
                            echo '<td> M </td>';
                        }else{
                            echo '<td> F </td>';
                        }
                    @endphp
                    <td>{{ $Affiliate -> telefono }}</td>
                    <td>
                        <a type="button" class="btn btn-secondary" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title="Descargar PDF"><i class="fas fa-file-download"></i></a>
                    </td>
                </tr>
            @endforeach--}}
        </tbody>
    </table>

    <span>  {{-- $Affiliates->links() --}}</span>
@endsection

