@extends('templates.general')

@section('body')
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2">

                    <div class="w-100 border-bottom border-white">
                        <h3 class="text-white">PEPE</h3>
                    </div>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">

                        <li class="py-2">
                            <a href="#submenu1" data-bs-toggle="collapse" class="text-white px-0 align-middle h5">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Mi cuenta</span>
                            </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="text-white px-0"> <span class="d-none d-sm-inline">Mis datos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-white px-0"> <span class="d-none d-sm-inline">Piensa coño piensa</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="py-2">
                            <a href="#submenu2" data-bs-toggle="collapse" class="text-white px-0 align-middle h5">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Pedidos</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="text-white px-0"> <span class="d-none d-sm-inline">Mis pedidos</span></a>
                                </li>
                                <li>
                                    <a href="#" class="text-white px-0"> <span class="d-none d-sm-inline">Devoluciones</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="py-2">
                            <a href="#submenu3" data-bs-toggle="collapse" class="px-0 align-middle text-white h5">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Ayuda</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="text-white px-0"> <span class="d-none d-sm-inline">Boton de Enter</span></a>
                                </li>
                                <li>
                                    <a href="#" class="text-white px-0"> <span class="d-none d-sm-inline">Gigante</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr>

                    {{-- <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">loser</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            <div class="col py-3">
                Content area...
            </div>
        </div>
    </div>
@endsection
