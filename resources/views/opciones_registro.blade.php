@extends('layout/plantilla')
@section('tituloPagina', 'UrnaElect')

@section('contenido')
<!-- Descripcion para registro postulados, votantes-->
<nav class="navbar navbar-light bg-light2">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('pantalla.opciones_registro')}}">
            <div class="d-grid gap-2 col-6 mx-auto">
                <h3 class="subtitulo"> Registro de votantes y postulados </h3>
            </div>
        </a>
    </div>
</nav>
<!-- Fin de la descripcion para registro postulados, votantes-->

<!-- Logo opcines para registro postulados, votantes-->
<nav class="navbar navbar-light bg-light2">
    <div class="container-fluid">
        <img src="/img/logo_votantes.png" class="img-fluid_votantes" >
    </div>
</nav>
<nav class="navbar navbar-light bg-light2">
    <div class="container-fluid">
        <img src="/img/logo_postulados.png" class="img-fluid_postulados" >
    </div>
</nav>
<!-- Logo opciones para registro postulados, votantes-->

<!-- Boton para registro postulados, votantes -->
<nav class="navbar navbar-light bg-light2">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('pantalla.votantes')}}">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Votantes</button>
            </div>
        </a>
        <a class="navbar-brand" href="{{route('pantalla.postulados')}}">
            <div class="d-grid gap-2 col-6 mx-auto">    
                <button class="btn btn-primary" type="button">Postulados</button>
            </div>
        </a>
    </div>
</nav>

<!-- Fin de boton para registro postulados, votantes-->
@endsection