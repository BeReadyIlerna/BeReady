@extends('templates.general')

@section('title')
    BeReady - Panel de administración
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2">

                    <div class="w-100 border-bottom border-white pt-3">
                        <h3 class="text-white">[[UserName]]</h3>
                    </div>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start pt-4"
                        id="menu">

                        <li class="py-2">
                            <a href="{{ route('category.new') }}" class="text-white px-0 align-middle h5">
                                <i class="fs-4 bi-person-fill-gear"></i> <span class="ms-1 d-none d-sm-inline">Crear
                                    categoria</span></a>
                        </li>
                        <li class="py-2">
                            <a href="{{ route('product.new') }}" class="text-white px-0 align-middle h5">
                                <i class="fs-4 bi-list-ul"></i> <span class="ms-1 d-none d-sm-inline">Crear
                                    Producto</span></a>
                        </li>
                        <li class="py-2">
                            <a href="#submenu3" data-bs-toggle="collapse" class="px-0 align-middle text-white h5">
                                <i class="fs-4 bi-question-circle-fill"></i> <span
                                    class="ms-1 d-none d-sm-inline">Ayuda</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="text-white px-0"> <span class="d-none d-sm-inline">Atención al
                                            cliente</span></a>
                                </li>
                                <li>
                                    <a href="#" class="text-white px-0"> <span class="d-none d-sm-inline">Cerrar
                                            sesión</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr>


                </div>
            </div>
            <div class="col py-3 ">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Description</th>
                            <th scope="col">IVA</th>
                            <th scope="col">Total</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td scope='row'>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}€</td>
                                <td>{{ $product->stock }} ud</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->IVA }}%</td>
                                <td>{{ $product->total }}€</td>
                                <td><button type="button" class="btn-primary btn-sm"><i
                                            class="bi bi-pencil-square fs-5"></i></button></td>
                                <td><button type="button" class="btn-danger btn-sm"><i
                                            class="bi bi-trash3-fill fs-5"></i></button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
