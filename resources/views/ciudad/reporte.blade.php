@extends('inicio')

@section('estilo')
    <style>
    td{
        border: 1px solid black;
    }
    </style>
@endsection

@section('contenido')
    
<h1>
    Reporte de Ciudades
</h1>  

<table>
    <tr>
        <td>
            
            <b>Estado</b>
        </td>
        <td>
            <b>Ciudad</b>
        </td>
    </tr>

    
        @foreach ($join as $item)
        <tr>
            <td>
                {{$item->NombreEstado}}
            </td>
            <td>
                {{$item->NombreCiudad}}
            </td>
        </tr>
        @endforeach
    

</table>

<a href="{{route('form')}}">Registrar Ciudad</a>
@endsection