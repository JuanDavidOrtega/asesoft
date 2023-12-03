@extends('layouts.plantilla')

@section('title','Editar Asesor') 
@section('body')
 <h1>Editar Asesor</h1>

 <a href="{{route('asesores.index')}}">Volver a lista asesores</a>
<br><br>
<form action="{{route('asesores.update', $asesore) }}" method="POST">
    @csrf 
    @method('put')

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{$asesore->nombre}}" required>
    <br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido"value="{{$asesore->apellido}}" required>
    <br><br>
    <label for="correo">Correo:</label>
    <input type="correo" id="correo" name="correo"value="{{$asesore->correo}}" required>
    <br><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password"value="{{$asesore->password}}" required>
    <br><br>
    <label for="id_tienda">Tienda:</label>
    <input type="id_tienda" id="id_tienda" name="id_tienda"value="{{$asesore->id_tienda}}" required>
    <br><br>
    <!-- Puedes agregar más campos según tus necesidades -->

    <button type="submit">Actualizar Asesor</button>
 </form>
 
@endsection
