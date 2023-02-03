@extends('templates.template')

@section('navbar')
    <header id="header-pc" class="sticky-lg-top">
        <!-- Logo Navbar PC & Tablet -->
        <nav class="navbar navbar-expand-lg bg-white d-none d-md-block">
            <div class="container-fluid justify-content-center ">
                <a href={{ route('index') }}>
                    <img class="nav-logo" src="./img/beready-logo.png" alt="logo beready">
                </a>
            </div>
        </nav>

        <!-- Menu -->
        <nav class="navbar navbar-expand-md mt-sm-0" aria-label="Tenth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-menu"
                    aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list mobile-menu-icon"></i>
                </button>

                <!-- Logo navbar mobile -->
                <a href={{ route('index') }}>
                    <img class="nav-logo d-block d-md-none my-auto" src="./img/beready-logo.png" alt="logo beready">
                </a>

                <div class="collapse navbar-collapse justify-content-md-center" id="mobile-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-md-5">
                            <a class="nav-link active text-hover-white" aria-current="page" href={{ route('index') }}><i
                                    class="bi bi-house-fill"></i> Inicio</a>
                        </li>

                        <li class="nav-item dropdown d-flex mx-md-5">
                            <a class="nav-link dropdown-toggle text-black text-hover-white" href="#"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-star-fill"></i>
                                Productos</a>
                            <ul class="dropdown-menu products-open">
                                <li><a class="dropdown-item mx-0 px-2 d-flex text-hover-white" href="#"><i
                                            class=""></i>Productos 1</a></li>
                                <li><a class="dropdown-item mx-0 px-2 d-flex text-hover-white" href="#"><i
                                            class=""></i>Productos 2</a></li>
                                <li><a class="dropdown-item mx-0 px-2 d-flex text-hover-white" href="#"><i
                                            class=""></i>Productos 3</a></li>
                                <li><a class="dropdown-item mx-0 px-2 d-flex text-hover-white" href="#"><i
                                            class=""></i>Productos 4</a></li>
                                <li><a class="dropdown-item mx-0 px-2 d-flex text-hover-white" href="#"><i
                                            class=""></i>Productos 5</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown d-flex position-relative mx-md-5">
                            <a class="nav-link dropdown-toggle text-black text-hover-white" href="#"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-cart-fill">
                                    <span id="badge-cart"
                                        class="position-absolute top-0 start-0 translate-middle badge rounded-pill badge-cart"
                                        hidden="true">
                                        1
                                    </span>
                                </i>
                                Mi cesta
                            </a>
                            <ul class="dropdown-menu cart-open">
                                <li id="empty-cart">
                                <a class="dropdown-item mx-0 px-2 d-flex text-hover-white " href="#">
                                    No has añadido nada aún
                                </a>
                            </li>
                            <li id="cart-product-1" hidden="true">
                                <a class="dropdown-item mx-0 px-2 d-flex text-hover-white " hidden
                                    href="#"><img class="d-flex img-cart"
                                        src="./img/productos/satisfyer-min.webp">29.99€ - Satisfyer Pro 2</a>
                            </li>
                            <li id="btn-gocart" hidden="true" class="text-center">
                                <a class="link-view-cart" href="./html/cartPage.html">Ver mi cesta</a>
                            </li>
                            </ul>
                        </li>

                        <div>
                            <li class="nav-item d-flex position-relative mx-md-5">
                                <a class="nav-link text-black text-hover-white" href="#" aria-expanded="false"><i
                                        class="bi bi-person-fill"></i> Acceder</a>
                            </li>
                        </div>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endsection

{{-- @section('footer')
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4  bg mb-0">
        <p class="col-md-4 mb-0 text-muted px-3">© 2022 LoveVibes</p>

        <a class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark px-3 px-md-0"
            rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
            <img alt="Licencia de Creative Commons" style="border-width:0"
                src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" />
        </a>

        <ul class="nav col-md-4 justify-content-end px-1 px-md-3">
            <li class="nav-item"><a href="./index.html" class="nav-link px-2 text-muted">Inicio</a></li>
            <li class="nav-item"><a href="./index.html#products" class="nav-link px-2 text-muted">Productos</a></li>
            <li class="nav-item"><a href="./html/cartPage.html" class="nav-link px-2 text-muted">Mi cesta</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="./index.html#hanging-icons" class="nav-link px-2 text-muted">¿Quienes sómos?</a>
            </li>
        </ul>
    </footer>
@endsection --}}
