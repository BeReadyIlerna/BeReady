@extends('templates.general')

@section('body')

    <div class="div-body col-12">

        <div class="p-4 border rounded my-5 py-5 justify-content-center container col-10 col-md-8 col-lg-6">
            <div class="text-center py-3">
                <h2>Registro Usuario</h2>
            </div>

            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="registerForm" action="{{ route('register') }}" method="POST">
                @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

                <div class="row">
                    <div class="form-floating mb-3 col-12 col-md-4">
                        <input class="form-control" id="name" type="text" name="name" placeholder="Nombre"
                            data-sb-validations="required" value="{{ old('name') }}" required />
                        <label for="name" class="mx-2">Nombre<span class="text-danger">*</span></label>
                    </div>

                    <div class="form-floating mb-3 col-12 col-md-8">
                        <input class="form-control" id="surname" type="text" name="surname" placeholder="Apellidos"
                            data-sb-validations="required" value="{{ old('surname') }}" required />
                        <label for="surname" class="mx-2">Apellidos<span class="text-danger">*</span></label>
                    </div>
                </div>

                <div class="row">
                    <div class="form-floating mb-3 col-12 col-md-8">
                        <input class="form-control" id="email" type="email" name="email" placeholder="Email"
                            data-sb-validations="required" value="{{ old('email') }}" />
                        <label for="email" class="mx-2">Email<span class="text-danger">*</span></label>
                    </div>

                    <div class="form-floating mb-3 col-12 col-md-4">
                        <input class="form-control" id="phone" type="tel" name="phone" placeholder="Telefono"
                            data-sb-validations="required" value="{{ old('phone') }}" />
                        <label for="phone" class="mx-2">Teléfono<span class="text-danger">*</span></label>
                    </div>
                </div>

                <div class="row">
                    <div class="form-floating mb-3 col-12 col-md-3">
                        <select class="form-select" id="way_type" aria-label="Tipo de vía" name="way_type" required>
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

                    <div class="form-floating mb-3 col-12 col-md-9">
                        <input class="form-control" id="way_name" type="text" name="way_name" placeholder="Tipo de vía"
                            data-sb-validations="required" value="{{ old('way_name') }}" required />
                        <label for="way_name" class="mx-2">Nombre de vía<span class="text-danger">*</span></label>
                    </div>
                </div>

                <div class="row">
                    <div class="form-floating mb-3 col-12 col-md-4">
                        <input class="form-control" id="province" type="text" name="province" placeholder="Ciudad"
                            data-sb-validations="required" value="{{ old('province') }}" required />
                        <label for="province" class="mx-2">Ciudad<span class="text-danger">*</span></label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-4">
                        <input class="form-control" id="town" type="text" name="town" placeholder="Municipio"
                            data-sb-validations="required" value="{{ old('town') }}" required />
                        <label for="town" class="mx-2">Municipio<span class="text-danger">*</span></label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-4">
                        <input class="form-control" id="zipcode" type="text" name="zipcode"
                            placeholder="Código Postal" data-sb-validations="required" value="{{ old('zipcode') }}"
                            required />
                        <label for="zipcode" class="mx-2">Código Postal<span class="text-danger">*</span></label>
                    </div>
                </div>

                <div class="row">
                    <div class="form-floating mb-3 col-12 col-md-6">
                        <input class="form-control" id="password" type="password" name="password"
                            placeholder="Contraseña" data-sb-validations="required" value="{{ old('password') }}" />
                        <label for="password" class="mx-2">Contraseña<span class="text-danger">*</span></label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-6">
                        <input class="form-control" id="password2" type="password" name="password_confirmation"
                            placeholder="Repita la contraseña" data-sb-validations="required"
                            value="{{ old('password2') }}" />
                        <label for="password2" class="mx-2">Repita la contraseña<span
                                class="text-danger">*</span></label>
                    </div>
                </div>

                <div class="row mt-4 d-grid justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Registrarse
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
