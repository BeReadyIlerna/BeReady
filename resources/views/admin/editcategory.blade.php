@extends('templates.admin')

@section('title')
    BeReady - Editar Categoría
@endsection

@section('adminContent')
    <div class="div-body col-12">
        <div class="p-4 border rounded my-5 py-5 justify-content-center container col-12 col-lg-6">
            <div class="text-center py-3">
                <h2>Editar la categoría</h2>
            </div>

            <form id="editCategory" action="{{ route('admin.editcategory') }}" method="POST">
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
                        data-sb-validations="required" value="{{$category->name}}" required />
                    <label for="nombre">Nombre<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control desc-form" id="description" type="text" name="description" placeholder="Descripción"
                        data-sb-validations="required" value="{{$category->description}}" required></textarea>
                    <label for="descripcion">Descripción <span class="text-danger">*</span></label>
                </div>
                
                <input name="id" value="{{ $category->id }}" hidden />

                <div class="justify-content-center d-flex">
                    <div class="d-grid col-6 col-lg-3">
                        <button class="btn btn-primary btn-lg" id="submitCategory" type="submit">Actualizar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


@endsection
