@extends('layout/plantilla')
@section('tituloPagina', 'Votante')

@section('contenido')
<!-- Descripcion para registro postulados, votantes-->
<nav class="navbar navbar-light bg-light2">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('pantalla.opciones_registro')}}">
            <div class="d-grid gap-2 col-6 mx-auto">
                <h3 class="subtitulo"> Ingrese los datos del votante </h3>
            </div>
        </a>
    </div>
</nav>
<!-- Fin de la descripcion para registro postulados, votantes-->

@endsection