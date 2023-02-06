@extends('templates.template')

@section('body')
    <!--Logo-->
    <div class="container d-grid justify-content-center">
        <a href="/"><img class="login-logo" src="./img/beready-logo.png" alt="logo beready"></a>
    </div>

    <section class="p-4 border rounded mx-auto w-25 mt-5 mw-350">

        <h2>Iniciar sesión</h2>
        <!--Form-->
        <form class="container g-3 needs-validation">
            <div class="row justify-content-center">
                <div class="col-12">
                    <label for="validationCustom01" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 mt-2">
                    <label for="validationCustom02" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row text-center mt-2">
                <a href="#">He olvidado mi contraseña</a>
            </div>
            <!--Submit-->
            <div class="row mt-4 d-grid justify-content-center">
                <button type="submit" class="btn btn-primary bg-primary">
                    Iniciar sesión
                </button>
            </div>
        </form>

        <!--Register Link-->
        <div class="container text-center mt-3">
            <div class="row col-12 mx-auto">
                <hr>
            </div>
            <p>¿Eres nuevo en BeReady?</p>
            <a clas="" href="#">
                <button class="btn btn-primary bg-primary px-4">
                    Regístrate
                </button>
            </a>
        </div>
    </section>
@endsection
