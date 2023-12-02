<!-- resources/views/asesores/index.blade.php -->
@extends('layouts.plantilla')

@section('title','listado de asesores') 
@section('body')
  <h1>Lista de Asesores</h1>
  <a href="{{route('asesores.create')}}">Crear Nuevo Asesor </a>

  <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>correo</th>
            <!-- Agrega más columnas según tu modelo de datos -->
        </tr>
    </thead>
    <tbody>
        @foreach($asesores as $asesore)
            <tr>
                {{--<td><a href="{{route('asesores.show', $asesore->id_asesores )}}">{{$asesore->id_asesores }}</a></td>--}}
                <td>{{ $asesore->id_asesores }}</td>
                <td>{{ $asesore->nombre }}</td>
                <td>{{ $asesore->apellido }}</td>
                <td>{{ $asesore->correo }}</td>
                <!-- Agrega más celdas según tu modelo de datos -->
            </tr>
        @endforeach
    </tbody>
      
  </table>
 {{$asesores->links()}}
@endsection
