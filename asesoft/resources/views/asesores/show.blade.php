<!-- resources/views/asesores/show.blade.php -->
@extends('layouts.plantilla')

@section('title','Detalles del asesor') 
@section('body')
     <h1>Detalles de  {{$asesore->nombre}}</h1>

        <p>ID: {{ $asesore->id_asesores }}</p>
        <p>Nombre: {{ $asesore->nombre }}</p>
        <p>Apellido: {{ $asesore->apellido }}</p>
        <p>correo: {{ $asesore->correo }}</p>
        <p>Tienda: {{ $asesore->id_tienda }}</p>
        <!-- Agrega más detalles según tu modelo de datos -->

     <a href="{{ route('asesores.index') }}">Volver a la lista de asesores</a>
 
@endsection

