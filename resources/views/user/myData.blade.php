@extends('templates.user')

@section('userContent')
    <section class="container">
        <h1>Mis Datos</h1>
        <h3>Bienvenido {{ $user->name }}</h3>

        <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <form action="{{ route('user.adressUpdate') }}" class="row g-3 needs-validation py-5" method="POST">
                        @method('PUT')
                        @csrf
                        <div class='modal-header'>
                            <h1 class='modal-title fs-5' id='exampleModalLabel'>Dirección</h1>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            <div class="form-floating mb-3 col-12">
                                <select class="form-select" id="way_type" aria-label="Tipo de vía" name="way_type"
                                    required>
                                    <option value="street" {{ old('way_type') == 'street' ? 'selected' : '' }}>
                                        Calle
                                    </option>
                                    <option value="avenue" {{ old('way_type') == 'avenue' ? 'selected' : '' }}>
                                        Avenida
                                    </option>
                                    <option value="square" {{ old('way_type') == 'square' ? 'selected' : '' }}>
                                        Plaza
                                    </option>
                                </select>
                                <label for="way_type" class="mx-2">Tipo de vía<span class="text-danger">*</span></label>
                            </div>

                            <div class="form-floating mb-3 col-12">
                                <input class="form-control" id="way_name" type="text" name="way_name"
                                    placeholder="Tipo de vía" data-sb-validations="required"
                                    value="{{ $address->way_name }}" required />
                                <label for="way_name" class="mx-2">Nombre de vía<span class="text-danger">*</span></label>
                            </div>

                            <div class="form-floating mb-3 col-12">
                                <input class="form-control" id="province" type="text" name="province"
                                    data-sb-validations="required" value="{{ $address->province }}" required />
                                <label for="province" class="mx-2">Provincia<span class="text-danger">*</span></label>
                            </div>
                            <div class="form-floating mb-3 col-12">
                                <input class="form-control" id="town" type="text" name="town"
                                    placeholder="Municipio" data-sb-validations="required" value="{{ $address->town }}"
                                    required />
                                <label for="town" class="mx-2">Municipio<span class="text-danger">*</span></label>
                            </div>
                            <div class="form-floating mb-3 col-12">
                                <input class="form-control" id="zipcode" type="text" name="zipcode"
                                    placeholder="Código Postal" data-sb-validations="required"
                                    value="{{ $address->zipcode }}" required />
                                <label for="zipcode" class="mx-2">Código Postal<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class='modal-footer'>
                            <button type='submit' class='btn btn-primary' data-bs-dismiss='modal'>Aceptar</button>
                            <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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

            <div class="form-floating col-sm-12 col-md-6">
                <input class="form-control" id="name" type="text" name="name" placeholder="Nombre"
                    data-sb-validations="required" value="{{ $user->name }}" required />
                <label for="name" class="mx-2">Nombre</label>
            </div>

            <div class="form-floating col-sm-12 col-md-6">
                <input class="form-control" id="surname" type="text" name="surname" placeholder="Apellidos"
                    data-sb-validations="required" value="{{ $user->surname }}" required />
                <label for="surname" class="mx-2">Apellidos</label>
            </div>

            <div class="form-floating col-sm-12 col-md-6">
                <input class="form-control" id="email" type="email" name="email" placeholder="Email"
                    data-sb-validations="required" value="{{ $user->email }}" />
                <label for="email" class="mx-2">Email</label>
            </div>

            <div class="form-floating col-sm-12 col-md-6">
                <input class="form-control" id="phone" type="tel" name="phone" placeholder="Telefono"
                    data-sb-validations="required" value="{{ $user->phone }}" />
                <label for="phone" class="mx-2">Teléfono</label>
            </div>

            <div class="col-12">
                <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
            </div>

        </form>

        <hr>

        <!--PASSWORD-->
        <form action="{{ route('user-password.update') }}" class="row g-3 needs-validation py-5" method="POST">
            @method('PUT')
            @csrf
            <h4>Contraseña</h4>

            <div class="form-floating col-sm-12 col-md-4">
                <input class="form-control" id="password" type="password" name="current_password"
                            placeholder="Contraseña" data-sb-validations="required" />
                        <label for="password" class="mx-2">Contraseña</label>

{{-- 

                <label for="validationCustom01" class="form-label">Antigua contraseña</label>
                <input type="password" class="form-control" id="validationCustom01" name="current_password" required>
                <div class="valid-feedback">
                    Looks good!
                </div> --}}
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
                <button type="button" data-bs-toggle='modal' data-bs-target='#exampleModal'
                    class="btn btn-primary">Editar</button>
            </div>
        </div>
    </section>
@endsection
