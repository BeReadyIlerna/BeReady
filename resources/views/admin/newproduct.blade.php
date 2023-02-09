@extends('templates.general')

@section('body')
    <div class="div-body col-12">
        <div class="py-5 justify-content-center container col-6">
            <div class="text-center py-3">
                <h2>Crear nuevo producto</h2>
            </div>

            <form id="contactForm" action="{{ route('product.create') }}" method="POST" enctype='multipart/form-data'>
                @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
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

                <div class="form-floating mb-3 mt-3">
                    <input class="form-control" id="name" type="text" name="name" placeholder="Nombre"
                        data-sb-validations="required" value="{{ old('name') }}" />
                    <label for="nombre">Nombre<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="price" type="number" name="price" placeholder="Precio"
                        data-sb-validations="required" value="{{ old('price') }}" />
                    <label for="precio">Precio<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="iva" type="number" name="IVA" placeholder="IVA"
                        data-sb-validations="required" value="{{ old('IVA') }}" />
                    <label for="iva">IVA<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="stock" type="number" name="stock" placeholder="Stock"
                        data-sb-validations="required" value="{{ old('stock') }}" />
                    <label for="stock">Stock<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" id="description" type="text" name="description" placeholder="Descripción"
                        style="height: 10rem;" data-sb-validations="required" value="{{ old('description') }}"></textarea>
                    <label for="descripcion">Descripción <span class="text-danger">*</span></label>
                </div>

                <!-- TODO Poner Categorias de la BBDD -->
                <div class="form-floating mb-3">
                    <select class="form-select" id="category" aria-label="Categoría" name="category">
                        <option value="mobile" {{ old('category') == 'mobile' ? 'selected' : '' }}>Móviles y tablets
                        </option>
                        <option value="ram" {{ old('category') == 'ram' ? 'selected' : '' }}>Memorias ram</option>
                        <option value="processor" {{ old('category') == 'processor' ? 'selected' : '' }}>Procesadores
                        </option>
                        <option value="graphiccard" {{ old('category') == 'graphiccard' ? 'selected' : '' }}>Tarjetas
                            gráficas</option>
                    </select>
                    <label for="category">Categoría<span class="text-danger">*</span></label>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="image" type="file" name="image" placeholder="Imagen"
                        accept="image/png, image/jpeg, image/webp" data-sb-validations="required"
                        value="{{ old('image') }}" />
                    <label for="image">Imagen<span class="text-danger">*</span></label>
                </div>

                <div class="justify-content-center d-flex">
                    <div class="d-grid col-3">
                        <button class="btn btn-primary btn-lg" id="submitProduct" type="submit">Crear producto</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection