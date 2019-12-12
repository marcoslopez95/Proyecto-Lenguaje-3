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
            
            <b>Matricula</b>
        </td>
        <td>
            <b>Modelo</b>
        </td>
        <td>
            
            <b>Cedula</b>
        </td>
        <td>
            <b>Nombre y Apellido</b>
        </td>
    </tr>

    
        <tr>
            <td>
                {{$join->Matricula}}
            </td>
            <td>
                {{$join->Modelo}}
            </td>
            <td>
                {{$join->Cedula}}
            </td>
            <td>
                {{$join->chofer->NombreApellidos}}
            </td>
        </tr>
    

</table>

<a href="{{route('form')}}">Registrar Ciudad</a>
@endsection