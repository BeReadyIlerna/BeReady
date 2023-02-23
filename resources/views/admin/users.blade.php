@extends('templates.admin')

@section('title')
    BeReady - Panel de administración
@endsection

@section('adminContent')
    <h1>Usuarios</h1>

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
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Rol</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td scope='row'>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->role }}</td>
                    <td><a href="{{ route('admin.editproduct', $user->id) }}"><button type="button"
                                class="btn-primary btn-sm"><i class="bi bi-pencil-square fs-5"></i></button></a></td>
                    <td><button type="button" class="btn-danger btn-sm"><i class="bi bi-trash3-fill fs-5"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="justify-content-center d-flex text-center">
        {{ $users->links() }}
    </div>
@endsection
