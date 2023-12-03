@extends('layouts.plantilla')

@section('title','Detalles del asesor') 
@section('body')

     <h1>Detalles de  {{$asesore->nombre}}</h1>

     <a href="{{route('asesores.index')}}">Volver a lista asesores</a>
     <br>
     <a href="{{route('asesores.edit', $asesore)}}">Editar Asesor</a>

        <p>ID: {{ $asesore->id_asesores }}</p>
        <p>Nombre: {{ $asesore->nombre }}</p>
        <p>Apellido: {{ $asesore->apellido }}</p>
        <p>correo: {{ $asesore->correo }}</p>
        <p>Tienda: {{ $asesore->id_tienda }}</p>

     <form action="{{route('asesores.destroy', $asesore)}}" method="POST">
      @csrf
      @method('delete')
      <button type="submit"> Eliminar Asesor</button>
     </form>
 
@endsection

