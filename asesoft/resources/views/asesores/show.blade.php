<!-- resources/views/asesores/show.blade.php -->
@extends('layouts.plantilla')

@section('title','Detalles del asesor') 
@section('body')
     <h1>Detalles de <?php echo $asesore; ?></h1>

        <p>ID: {{ $asesore->id_asesores }}</p>
        <p>Nombre: {{ $asesore->nombre }}</p>
        <p>Email: {{ $asesore->correo }}</p>
        <!-- Agrega más detalles según tu modelo de datos -->

     <a href="{{ route('') }}">Volver a la lista de asesores</a>
 
@endsection

