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
                        data-sb-validations="required" />
                    <label for="nombre">Nombre</label>
                    {{-- @error('name')
                        <div class="alert alert-danger">¡Ups! Hubo un error en el nombre</div>
                    @enderror --}}
                    {{-- <div class="invalid-feedback" data-sb-feedback="name:required">El nombre no puede estar vacío</div> --}}
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="price" type="number" name="price" placeholder="Precio"
                        data-sb-validations="required" />
                    <label for="precio">Precio</label>
                    {{-- @error('price')
                        <div class="alert alert-danger">¡Ups! Hubo un error en el precio</div>
                    @enderror --}}
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="iva" type="number" name="IVA" placeholder="IVA"
                        data-sb-validations="required" />
                    <label for="iva">IVA</label>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="stock" type="number" name="stock" placeholder="Stock"
                        data-sb-validations="required" />
                    <label for="stock">Stock</label>
                    {{-- @error('stock')
                        <div class="alert alert-danger">¡Ups! Hubo un error en el stock</div>
                    @enderror --}}
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" id="description" type="text" name="description" placeholder="Descripción"
                        style="height: 10rem;" data-sb-validations="required"></textarea>
                    <label for="descripcion">Descripción</label>
                    {{-- @error('description')
                        <div class="alert alert-danger">¡Ups! Hubo un error en la descripción</div>
                    @enderror --}}
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="category" aria-label="Categoría" name="category">
                        <option value="mobile">Móviles y tablets</option>
                        <option value="ram">Memorias ram</option>
                        <option value="processor">Procesadores</option>
                        <option value="graphiccard">Tarjetas gráficas</option>
                        {{-- <option value=""></option> --}}
                    </select>
                    <label for="category">Categoría</label>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="image" type="file" name="image" placeholder="Imagen"
                        accept="image/png, image/jpeg, image/webp" data-sb-validations="required" />
                    <label for="image">Imagen</label>
                    {{-- @error('image')
                        <div class="alert alert-danger">¡Ups! Hubo un error en la imagen</div>
                    @enderror --}}
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
