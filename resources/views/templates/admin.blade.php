@extends('templates.general')

@section('body')
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2">

                    <div class="w-100 border-bottom border-white pt-3">
                        <h3 class="text-white">{{Auth::user()->name}}</h3>
                    </div>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start pt-4"
                        id="menu">

                        <li class="py-2">
                            <a href={{ route('admin.users') }} class="text-white px-0 align-middle h5">
                                <i class="fs-4 bi-person-fill-gear"></i> <span class="ms-1 d-none d-sm-inline">Usuarios</span></a>
                        </li>
                        <li class="py-2">
                            <a href={{ route('admin.categories') }} class="text-white px-0 align-middle h5">
                                <i class="fs-4 bi bi-tags-fill"></i> <span class="ms-1 d-none d-sm-inline">Categorías</span></a>
                        </li>
                        <li class="py-2">
                            <a href={{ route('admin.products') }} class="text-white px-0 align-middle h5">
                                <i class="fs-4 bi-basket-fill"></i> <span class="ms-1 d-none d-sm-inline">Productos</span></a>
                        </li>
                        <li class="py-2">
                            <a href="#submenu2" data-bs-toggle="collapse" class="px-0 align-middle text-white h5">
                                <i class="fs-4 bi-list-ul"></i> <span class="ms-1 d-none d-sm-inline">Añadir Contenido</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href={{ route('category.new') }} class="text-white px-0"> <span class="d-none d-sm-inline">Crear Categoría</span></a>
                                </li>
                                <li class="w-100">
                                    <a href={{ route('product.new') }} class="text-white px-0"> <span class="d-none d-sm-inline">Crear Producto</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="py-2">
                            <a href="#submenu3" data-bs-toggle="collapse" class="px-0 align-middle text-white h5">
                                <i class="fs-4 bi-question-circle-fill"></i> <span class="ms-1 d-none d-sm-inline">Ayuda</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href={{ route('user.support') }} class="text-white px-0"> <span class="d-none d-sm-inline">Atención al cliente</span></a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="button-as-text text-white">Cerrar sesión</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr>

                </div>
            </div>
            <div class="col py-3">
                @yield('adminContent')
            </div>
        </div>
    </div>
@endsection
