@extends('templates.general')

@section('body')
    <div class="div-body col-12">
        <div class="p-4 border rounded my-5 py-5 justify-content-center container col-12 col-lg-6">
            <div class="text-center py-3">
                <h2>Crear nueva categoría</h2>
            </div>

            <form id="contactForm" action="{{ route('category.create') }}" method="POST" enctype='multipart/form-data'>
                @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
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

                <div class="form-floating mb-3 mt-3">
                    <input class="form-control" id="name" type="text" name="name" placeholder="Nombre"
                        data-sb-validations="required" value="{{ old('name') }}" required />
                    <label for="nombre">Nombre<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control desc-form" id="description" type="text" name="description" placeholder="Descripción"
                        data-sb-validations="required" value="{{ old('description') }}" required></textarea>
                    <label for="descripcion">Descripción <span class="text-danger">*</span></label>
                </div>

                <div class="justify-content-center d-flex">
                    <div class="d-grid col-6 col-lg-3">
                        <button class="btn btn-primary btn-lg" id="submitCategory" type="submit">Crear categoría</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
