@extends('templates.admin')

@section('title')
    BeReady - Editar Producto
@endsection

@section('adminContent')
    <div class="div-body col-12">
        <div class="p-4 border rounded my-5 py-5 justify-content-center container col-12 col-lg-6">
            <div class="text-center py-3">
                <h2>Editar el producto</h2>
            </div>

            <form id="contactForm" action="{{ route('admin.editsproduct') }}" method="POST" enctype='multipart/form-data'>
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
                        data-sb-validations="required" value="{{ $product->name }}" required />
                    <label for="nombre">Nombre<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="price" type="number" step="0.01" name="price"
                        placeholder="Precio" data-sb-validations="required" value="{{ $product->price }}" required />
                    <label for="precio">Precio<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="iva" type="number" name="iva" placeholder="IVA"
                        data-sb-validations="required" value="{{ $product->IVA }}" required />
                    <label for="iva">IVA<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="stock" type="number" name="stock" placeholder="Stock"
                        data-sb-validations="required" value="{{ $product->stock }}" required />
                    <label for="stock">Stock<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control desc-form" id="description" type="text" name="description"
                        data-sb-validations="required" value="" required>{{ $product->description }}</textarea>
                    <label for="descripcion">Descripción <span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="category" aria-label="Categoría" name="category" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="category">Categoría<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="image" type="file" name="image" placeholder="Imagen"
                        accept="image/png, image/jpeg, image/webp" data-sb-validations="required"
                        value="{{ old('image') }}" required />
                    <label for="image">Imagen<span class="text-danger">*</span></label>
                </div>

                <input name="id" value="{{ $product->id }}" hidden />

                <div class="justify-content-center d-flex">
                    <div class="d-grid col-6 col-lg-3">
                        <button class="btn btn-primary btn-lg" id="submitProduct" type="submit">Actualizar</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
