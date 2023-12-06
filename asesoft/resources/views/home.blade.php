@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('inicio de sesion exitoso') }}<br><br>
                    <a href="{{route('asesores.index')}}">asesores </a><br><br>
                    <a href="{{route('asesores.index')}}">tiendas </a><br><br>
                    <a href="{{route('asesores.index')}}">productos </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
