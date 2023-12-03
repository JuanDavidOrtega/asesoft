@extends('layouts.plantilla')

@section('title','Crear Nuevo Asesor') 
@section('body')
 <h1>Crear Nuevo Asesor</h1>

 <a href="{{route('asesores.index')}}">Volver a lista asesores</a>
<br><br>
<form action="{{ route('asesores.Fcreate') }}" method="POST">
    @csrf <!-- Token de seguridad de Laravel -->

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required>
    <br><br>
    <label for="correo">Correo:</label>
    <input type="correo" id="correo" name="correo" required>
    <br><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    <label for="id_tienda">Tienda:</label>
    <input type="id_tienda" id="id_tienda" name="id_tienda" required>
    <br><br>
    <!-- Puedes agregar más campos según tus necesidades -->

    <button type="submit">Crear Usuario</button>
 </form>
 
@endsection
