@extends('inicio')

@section('contenido')
    
<form action="{{route('chofer-save')}}" method="post">
    @csrf
<table>
    <tr>
        <td colspan="2">
            <label>Camion:</label>
        </td>
    </tr>
    <tr>
        <td>
            <label>Matricula</label>
        </td>
        <td>
            <input type="text" name='matricula' id='matricula'>
        </td>
    </tr>
    <tr>
        <td>
            <label>Modelo</label>
        </td>
        <td>
            <input type="text" name='modelo' id='modelo'>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <b>Chofer:</b>
        </td>
    </tr>
    <tr>
        <td><label>Cedula:</label></td>
        <td><input type="text" name="Cedula" id="Cedula"></td>
    </tr>
    <tr>
        <td><label>Nombre y Apellidos:</label></td>
        <td><input type="text" name="Nomb_ape" id="Nomb_ape"></td>
    </tr>
    <tr>
        <td><label>Telefono:</label></td>
        <td><input type="text" name="Telefono" id="Telefono"></td>
    </tr>
    <tr>
        <td><label>Direccion:</label></td>
        <td><input type="text" name="Direccion" id="Direccion"></td>
    </tr>
    <tr>
        <td><label>Sueldo:</label></td>
        <td><input type="number" step='0.01' name="Sueldo" id="Sueldo"></td>
    </tr>
    
    <tr>
        <td colspan="2" align="center">
            <input type="submit" value="enviar">
        </td>
    </tr>
</table>
</form>

<form action="{{route('reporte-chofer')}}" method="Post">
    @csrf
    <input type="search" placeholder="Buscar Camion" name="buscar">
    <input type="submit" value="Buscar">
    
</form>
<form action="{{route('reporte-chofe')}}" method="Post">
    @csrf
    <input type="search" placeholder="Buscar Chofer" name="buscar">
    <input type="submit" value="Buscar">
    
</form>
@endsection