@extends('templates.admin')

@section('title')
    BeReady - Panel de administración
@endsection

@section('adminContent')
    <h1>Productos</h1>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session('errors'))
        <div class="alert alert-danger">
            {{ session('errors') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col" class="d-none d-md-table-cell">Precio</th>
                <th scope="col" class="d-none d-md-table-cell">Stock</th>
                <th scope="col" class="d-none d-md-table-cell">Description</th>
                <th scope="col" class="d-none d-md-table-cell">IVA</th>
                <th scope="col" class="d-none d-md-table-cell">Total</th>
                <th scope="col">Estado</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td scope='row'>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td class="d-none d-md-table-cell">{{ $product->price }}€</td>
                    <td class="d-none d-md-table-cell">{{ $product->stock }} ud</td>
                    <td class="d-none d-md-table-cell">{{ $product->description }}</td>
                    <td class="d-none d-md-table-cell">{{ $product->IVA }}%</td>
                    <td class="d-none d-md-table-cell">{{ $product->total }}€</td>
                    <td class="text-center">
                        @if ($product->status == 'enabled')
                            <i class="bi bi-check-lg text-success fs-5"></i>
                        @else
                            <i class="bi bi-x-lg text-danger fs-5"></i>
                        @endif
                    </td>
                    <td class="text-center"><a href="{{ route('admin.editproduct', $product->id) }}" class="text-light"><button type="button"
                                class="btn-primary btn-sm"><i class="bi bi-pencil-square fs-5"></i></button></a></td>
                    <td class="text-center"><a href="{{ route('admin.deleteproduct', $product->id) }} " class="text-light"><button
                                type="button" class="btn-danger btn-sm"><i class="bi bi-trash3-fill fs-5"></i></a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="justify-content-center d-flex text-center">
        {{ $products->links() }}
    </div>
@endsection
