@extends('templates.user')

@section('userContent')
    <section class="container">
        <h1>Contacta con nosotros</h1>
        <form class="row g-3 needs-validation" novalidate>
          <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Motivo de consulta</label>
            <input type="text" class="form-control" id="validationCustom01" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Descripción</label>
            <input type="textarea" class="form-control desc-form" id="validationCustom02" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Enviar</button>
          </div>
        </form>
    </section>
@endsection