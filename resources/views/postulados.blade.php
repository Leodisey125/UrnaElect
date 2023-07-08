@extends('layout/plantilla')
@section('tituloPagina', 'Postulados')

@section('contenido')
<!-- Descripcion para registro postulados, votantes-->
<nav class="navbar navbar-light bg-light2">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('pantalla.opciones_registro')}}">
            <div class="d-grid gap-2 col-6 mx-auto">
                <h3 class="subtitulo"> Ingrese los datos del postulante </h3>
            </div>
        </a>
    </div>
</nav>
<!-- Fin de la descripcion para registro postulados, votantes-->

<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="nameId" class="form-label">Nombre del candidato</label>
    <input type="text" class="form-control" id="nameId" required>
    <div class="valid-feedback">
    </div>
    <div class="invalid-feedback">
      Es necesario poner el nombre
    </div>
  </div>

  <div class="col-md-4">
    <label for="matricula" class="form-label2">Matricula</label>
    <input type="text" class="form-control" id="matricula" required>
    <div class="valid-feedback">
    </div>
    <div class="invalid-feedback">
      Es necesario poner la matricula
    </div>
  </div>

    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('pantalla.opciones_registro')}}">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Iniciar</button>
            </div>
        </a>
    </div>
  




  

</form>











<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>
@endsection