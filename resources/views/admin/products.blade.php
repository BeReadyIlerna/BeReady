@extends('templates.admin')

@section('title')
    BeReady - Panel de administración
@endsection

@section('adminContent')
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
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td scope='row'>{{ $product->id }}</td>
                    <td class="reduced-text">{{ $product->name }}</td>
                    <td class="d-none d-md-table-cell">{{ $product->price }}€</td>
                    <td class="d-none d-md-table-cell">{{ $product->stock }} ud</td>
                    <td class="reduced-text d-none d-md-table-cell">{{ $product->description }}</td>
                    <td class="d-none d-md-table-cell">{{ $product->IVA }}%</td>
                    <td class="d-none d-md-table-cell">{{ $product->total }}€</td>
                    <td><a href="{{ route('admin.editproduct', $product->id) }}"><button type="button"
                                class="btn-primary btn-sm"><i class="bi bi-pencil-square fs-5"></i></button></a></td>
                    <td><button type="button" class="btn-danger btn-sm"><i class="bi bi-trash3-fill fs-5"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="justify-content-center d-flex text-center">
        {{$products->links() }}
    </div>
@endsection
