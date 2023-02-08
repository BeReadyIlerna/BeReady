@extends('templates.general')

@section('body')
    <div class="div-body">
        <div class="mt-5 mb-5 justify-content-center d-grid container">

            <h2>Crear nuevo producto</h2>

            <form id="contactForm" action="{{ route('product.create') }}" method="POST" enctype='multipart/form-data'
                data-sb-form-api-token="API_TOKEN">
                @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @error('name')
                    <div class="alert alert-danger">¡Ups! Hubo un error en el nombre</div>
                @enderror
                @error('price')
                    <div class="alert alert-danger">¡Ups! Hubo un error en el precio</div>
                @enderror
                @error('stock')
                    <div class="alert alert-danger">¡Ups! Hubo un error en el stock</div>
                @enderror
                @error('description')
                    <div class="alert alert-danger">¡Ups! Hubo un error en la descripción</div>
                @enderror
                @error('description')
                    <div class="alert alert-danger">¡Ups! Hubo un error en la imagen</div>
                @enderror
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" name="name" placeholder="Nombre"
                        data-sb-validations="required" />
                    <label for="nombre">Nombre</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">El nombre no puede estar vacío</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="price" type="number" name="price" placeholder="Precio"
                        data-sb-validations="required" />
                    <label for="precio">Precio</label>
                    <div class="invalid-feedback" data-sb-feedback="price:required">El precio no puede estar vacío</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="iva" type="number" name="IVA" placeholder="IVA"
                        data-sb-validations="required" />
                    <label for="iva">IVA</label>
                    <div class="invalid-feedback" data-sb-feedback="iva:required">El IVA no puede estar vacío</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="stock" type="number" name="number" placeholder="Stock"
                        data-sb-validations="required" />
                    <label for="stock">Stock</label>
                    <div class="invalid-feedback" data-sb-feedback="stock:required">El stock no puede estar vacío</div>
                </div>
                <div class="form-floating mb-3">
                    
                    
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" id="description" type="text" name="description" placeholder="Descripción"
                        style="height: 10rem;" data-sb-validations="required"></textarea>
                    <label for="descripcion">Descripción</label>
                    <div class="invalid-feedback" data-sb-feedback="description:required">La descripción no puede estar
                        vacía</div>
                </div>
                <label for="image">Imagen:</label>
                <input type="file" name="image" accept="image/png, image/jpeg, image/webp">
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        <p>To activate this form, sign up at</p>
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>
@endsection
