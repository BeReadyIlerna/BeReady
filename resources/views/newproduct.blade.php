@extends('templates.general')

@section('body')
    <div class="div-body">
        <div class="mt-5 mb-5 justify-content-center d-grid ">

            <h2>Crear nuevo producto</h2>

            <form action="{{ route('product.create') }}" method="POST" enctype='multipart/form-data'>
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
                <label for="name">Nombre:</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre"
                    class="form-control mb-2" autofocus>

                <label for="price">Precio:</label>
                <input type="number" name="price" value="{{ old('price') }}" placeholder="Precio"
                    class="form-control mb-2">

                <label for="IVA">IVA:</label>
                <input type="number" name="IVA" value="{{ old('IVA') }}" placeholder="IVA"
                    class="form-control mb-2">

                <label for="stock">Stock:</label>
                <input type="number" name="stock" value="{{ old('stock') }}" placeholder="Stock"
                    class="form-control mb-2">

                <label for="description">Descripción:</label>
                <textarea type="text" name="description" value="{{ old('description') }}" placeholder="Descripción"
                    class="form-control mb-2"></textarea>

                <label for="image">Imagen:</label>
                <input type="file" name="image" accept="image/png, image/jpeg, image/webp">
                <br>
                <br>
                <button class="btn btn-primary btn-block text-center" type="submit">
                    Introducir nuevo producto
                </button>



            </form>
        </div>
    </div>
@endsection
