@extends('inicio')

@section('contenido')
    
<form action="{{route('guardar-ciudad')}}" method="post">
    @csrf
    <label>Estado:</label>
    <select name="estado" id="">
        @foreach ($estado as $item)
            <option value="{{$item->idEstado}}">{{$item->NombreEstado}}</option>
        @endforeach
    </select>

    <label>Introducir Ciudad:</label>
    <input type="text" name="ciudad" id="ciudad">
    <input type="submit" value="enviar">
</form>

<a href="{{route('reporte')}}">Reporte de Ciudades</a>
@endsection