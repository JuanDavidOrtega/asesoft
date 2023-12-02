@extends('layouts.plantilla')

@section('title','Crear Nuevo Asesor') 
@section('body')
 <h1>Crear Nuevo Asesor</h1>
{{--
<form action="{{ route('') }}" method="POST">
    @csrf <!-- Token de seguridad de Laravel -->

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
 
    <!-- Puedes agregar más campos según tus necesidades -->

    <button type="submit">Crear Usuario</button>
 </form>
 --}}
@endsection
