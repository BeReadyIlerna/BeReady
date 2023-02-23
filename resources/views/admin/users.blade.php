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
                    <form action="{{ route('admin.edituser') }}" method="POST">
                        @csrf
                        <input name="id" value="{{ $user->id }}" hidden />
                        <td>
                            <select class="" id="role" aria-label="Rol" name="role" required>
                                <option value="client" {{ $user->role == 'client' ? 'selected' : '' }}>
                                    Cliente
                                </option>
                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>
                                    Admin
                                </option>
                            </select>
                        </td>
                        {{-- <td>{{ $user->role }}</td> --}}
                        <td><button type="submit" class="btn-primary btn-sm"><i
                                    class="bi bi-check-lg fs-5"></i></button></a></td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="justify-content-center d-flex text-center">
        {{ $users->links() }}
    </div>
@endsection
