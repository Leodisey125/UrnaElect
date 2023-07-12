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
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      ¡Se ve bien!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      ¡Se ve bien!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Por favor, elije un nombre de usuario.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Proporciona una ciudad válida.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Estado</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Elige...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Selecciona un estado válido.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Código postal</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Proporciona un código postal válido.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepta los términos y condiciones
      </label>
      <div class="invalid-feedback">
        Debe estar de acuerdo antes de enviar.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar formulario</button>
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