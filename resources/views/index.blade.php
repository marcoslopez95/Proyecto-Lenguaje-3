@extends('inicio')

@section('contenido')
    <ul>
        <li>
        <a href='{{route('ciudad-form')}}'>Insertar Ciudad</a>
        </li>
        <li>
            <a href='{{route('chofer-form')}}'>Insertar Chofer</a>
        </li>
        
    </ul>
@endsection