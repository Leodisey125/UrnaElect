@extends('layout/plantilla')
@section('tituloPagina', 'UrnaElect')

@section('contenido')
<!-- Logo portada -->
<nav class="navbar navbar-light bg-light2">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/img/logo_portada.png" class="img-fluid" >
        </a>
    </div>
</nav>
<!-- Logo portada fin-->

<!-- Boton portada -->
<nav class="navbar navbar-light bg-light2">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('pantalla.opciones_registro')}}">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Iniciar</button>
            </div>
        </a>
    </div>
</nav>

<!-- Boton portada fin s-->
@endsection