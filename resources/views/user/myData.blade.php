@extends('templates.user')

@section('userContent')
    <section class="container">
        <h1>Mis Datos</h1>
        <h3>Bienvenido {{ $user->name }}</h3>
        
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!--PERSONAL DATA-->
        <form action="{{ route('user-profile-information.update') }}" class="row g-3 needs-validation py-5" method="POST">
            @method('PUT')
            @csrf
            <h4>Datos Personales</h4>
            <div class="col-sm-12 col-md-6">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" name="name" value="{{ $user->name }}"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="validationCustom02" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="validationCustom02" name="surname"
                    value="{{ $user->surname }}" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="validationCustomUsername" class="form-label">Email</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="validationCustom02" name="email"
                        value="{{ $user->email }}" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="validationCustom03" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="validationCustom03" name="phone"
                    value="{{ $user->phone }}" required>
                <div class="invalid-feedback">
                    Please provide a valid number.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </form>

        <hr>

        <!--PASSWORD-->
        <form action="{{ route('user-password.update') }}" class="row g-3 needs-validation py-5" method="POST">
            @method('PUT')
            @csrf
            <h4>Contraseña</h4>
            <div class="col-sm-12 col-md-4">
                <label for="validationCustom01" class="form-label">Antigua contraseña</label>
                <input type="password" class="form-control" id="validationCustom01" name="current_password" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Nueva contraseña</label>
                <input type="password" class="form-control" id="validationCustom02" name="password" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Repetir contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="validationCustom02" name="password_confirmation"
                        required>
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
                <p class="col-md-6">
                    {{ $address->way_name . ', ' . $address->town . ', ' . $address->province . ', ' . $address->zipcode }}
                </p>
                <a href="#"><button type="button" class="btn btn-primary">Editar</button></a>
            </div>
        </div>
    </section>
@endsection
