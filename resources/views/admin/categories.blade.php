@extends('templates.admin')

@section('title')
    BeReady - Panel de administración
@endsection

@section('adminContent')
    <h1>Categorías</h1>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Description</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td scope='row'>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td><a href="{{ route('admin.editproduct', $category->id) }}"><button type="button"
                                class="btn-primary btn-sm"><i class="bi bi-pencil-square fs-5"></i></button></a></td>
                    <td><button type="button" class="btn-danger btn-sm"><i class="bi bi-trash3-fill fs-5"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="justify-content-center d-flex text-center">
        {{ $categories->links() }}
    </div>
@endsection
