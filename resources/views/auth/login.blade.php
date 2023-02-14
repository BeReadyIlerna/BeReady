@extends('templates.general')

@section('body')
    <div class="div-body col-12">

        <div class="p-4 border rounded my-5 py-5 justify-content-center container col-10 col-md-8 col-lg-6 col-xl-3">
            <div class="text-center py-3">
                <h2>Iniciar Sesión</h2>
            </div>

            <form id="loginForm" action="" method="POST">
                @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

                <div class="form-floating mb-3 mt-3">
                    <input class="form-control" id="email" type="email" name="email" placeholder="Email"
                        data-sb-validations="required" value="" required />
                    <label for="nombre">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Contraseña"
                        data-sb-validations="required" value="" required />
                    <label for="precio">Contraseña</label>
                </div>

                <div class="row text-center mt-2">
                    <a href="#">He olvidado mi contraseña</a>
                </div>
                <div class="row mt-4 d-grid justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg">
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
                <a clas="" href="{{ route('signup') }}">
                    <button class="btn btn-primary btn-lg">
                        Regístrate
                    </button>
                </a>
            </div>

        </div>
    </div>
@endsection
