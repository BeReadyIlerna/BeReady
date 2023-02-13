@extends('templates.user')

@section('userContent')
    <section class="container">
        <h1>Mis Datos</h1>
        <h3>Bienvenido [[UserName]]</h3>

        <!--PERSONAL DATA-->
        <form class="row g-3 needs-validation py-5" novalidate>
            <h4>Datos Personales</h4>
            <div class="col-sm-12 col-md-6">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="[[UserName]]" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="validationCustom02" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="[[UserSurname]]" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="validationCustomUsername" class="form-label">Email</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="validationCustom02" placeholder="[[Email]]" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="validationCustom03" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="validationCustom03" placeholder="[[Phone]]" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </form>

        <hr>

        <!--PASSWORD-->
        <form class="row g-3 needs-validation py-5">
            <h4>Contraseña</h4>
            <div class="col-sm-12 col-md-4">
                <label for="validationCustom01" class="form-label">Antigua contraseña</label>
                <input type="password" class="form-control" id="validationCustom01" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Nueva contraseña</label>
                <input type="password" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Repetir contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="validationCustom02" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Guardar cambios</button>
            </div>
        </form>

        <hr>

        <!--ADDRESS-->
        <div class="row py-5">
            <h4>Dirección</h4>
            <div class="d-flex justify-content-between">
                <p class="col-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur perferendis, expedita distinctio debitis,
                    repudiandae impedit quo est cum quis consequuntur dolor. Recusandae perspiciatis cupiditate id commodi
                    suscipit optio voluptatem quibusdam!</p>
                <a href="#"><button type="button" class="btn btn-primary">Editar</button></a>
            </div>            
        </div>
    </section>
@endsection
