@extends('templates.template')

@section('navbar')
    <header id="header-pc" class="sticky-lg-top">
        <!-- Logo Navbar PC & Tablet -->
        <nav class="navbar navbar-expand-lg bg-white d-none d-md-block">
            <div class="container-fluid justify-content-center ">
                <a href={{ route('index') }}>
                    <img class="nav-logo" src="{{ URL::asset('img/beready-logo.png') }}" alt="logo beready">
                </a>
            </div>
        </nav>

        <!-- Menu -->
        <nav class="navbar navbar-expand-md mt-sm-0 bg-white" aria-label="Tenth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-menu"
                    aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list mobile-menu-icon"></i>
                </button>

                <!-- Logo navbar mobile -->
                <a href={{ route('index') }}>
                    <img class="nav-logo d-block d-md-none my-auto" src="{{ URL::asset('img/beready-logo.png') }}"
                        alt="logo beready">
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
                                Categorías</a>
                            <ul class="dropdown-menu products-open">
                                @foreach (\App\Models\Category::all() as $category)
                                    <li>
                                        <a class="dropdown-item px-2 text-hover-white" href="/{{ $category->name }}"><i
                                                class="bi bi-tag-fill pr-2"></i> {{ $category->name }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item dropdown d-flex position-relative mx-md-5">
                            <a class="nav-link dropdown-toggle text-black text-hover-white" href="#"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-cart-fill">
                                    @auth
                                        @if (count(Auth::user()->cart->products) > 0)
                                            <span id="badge-cart"
                                                class="position-absolute top-0 start-0 translate-middle badge rounded-pill badge-cart">
                                                {{ count(Auth::user()->cart->products) }}
                                            </span>
                                        @endif
                                    @endauth
                                </i>
                                Mi cesta
                            </a>
                            <ul class="dropdown-menu cart-open">
                                @guest
                                    <a class="dropdown-item mx-0 px-2 d-flex text-hover-white text-cart"
                                        href="{{ route('login') }}">
                                        ¡Inicia sesión y empieza a comprar!
                                    </a>
                                @endguest
                                @auth
                                    @if (count(Auth::user()->cart->products) < 1)
                                        <li id="empty-cart">
                                            <a class="dropdown-item mx-0 px-2 d-flex text-hover-white text-cart" href="">
                                                No has añadido nada aún
                                            </a>
                                        </li>
                                    @else
                                        @foreach (Auth::user()->cart->products as $product)
                                            <li id="cart-product-1">
                                                <a class="dropdown-item mx-0 px-2 d-flex text-hover-white text-cart" hidden
                                                    href="{{ route('product') . '/' . $product->id }}"><img
                                                        class="d-flex img-cart"
                                                        src="{{ URL::asset('img/' . $product->image) }}">{{ ' · ' . $product->pivot->quantity . ' - ' . $product->name }}</a>
                                            </li>
                                        @endforeach
                                        <hr>
                                        <li id="btn-gocart" class="text-center pb-3">
                                            <a class="link-view-cart" href="{{ route('user.cart') }}">Ver mi cesta</a>
                                        </li>
                                    @endif
                                @endauth
                            </ul>
                        </li>

                        @guest
                            <div>
                                <li class="nav-item d-flex position-relative mx-md-5">
                                    <a class="nav-link text-black text-hover-white" href={{ Route('login') }}
                                        aria-expanded="false"><i class="bi bi-person-fill"></i> Mi cuenta</a>
                                </li>
                            </div>
                        @endguest
                        @auth
                            <li class="nav-item dropdown d-flex mx-md-5">
                                <a class="nav-link dropdown-toggle text-primary text-hover-white" href="#"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i>
                                    {{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu products-open">
                                    @if (Auth::user()->role == 'admin')
                                        <li>
                                            <a class="dropdown-item px-2 text-hover-white" href="{{ route('admin.users') }}"><i
                                                    class="bi bi-gear-fill"></i> Panel de administración</a>
                                        </li>
                                    @elseif (Auth::user()->role == 'client')
                                        <li>
                                            <a class="dropdown-item px-2 text-hover-white" href="{{ route('user.data') }}"><i
                                                    class="bi bi-person-circle"></i> Panel de usuario</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a class="dropdown-item px-2 text-hover-white" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('formLogout').submit();"><i
                                                class="bi bi-x-square-fill"></i> {{ __('Logout') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <form action="{{ route('logout') }}" method="POST" id="formLogout">
                                @csrf
                            </form>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endsection

@section('footer')
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <div class="container text-center text-md-start pt-5">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">Quiénes somos
                    </h6>
                    <p>
                        Esta es una página web realizada por estudiantes de 2º año de
                        DAW (Desarrollo de Aplicaciones Web) con fines exclusivamente
                        educativos.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Ayuda</h6>
                    <p>
                        <a href="https://www.w3schools.com/html/default.asp" class="text-reset">Preguntas frecuentes</a>
                    </p>
                    <p>
                        <a href="https://www.w3schools.com/css/default.asp" class="text-reset">Tramitar devolución</a>
                    </p>
                    <p>
                        <a href="https://www.w3schools.com/js/default.asp" class="text-reset">Asistencia técnica</a>
                    </p>
                    <p>
                        <a href="https://www.w3schools.com/js/default.asp" class="text-reset">Trabaja con nosotros</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                    <p>
                        <i class="bi bi-geo-alt"></i> &nbsp;
                        Avda. de la Innovación 7-9, Sevilla
                    </p>
                    <p>
                        <i class="bi bi-envelope-at"></i> &nbsp;
                        bereadyilerna@gmail.com
                    </p>
                    <i class="bi bi-telephone"></i> &nbsp;
                    +44 28 4046 4777
                    </p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>

        <!-- Copyright -->
        <div class="text-center p-4">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://github.com/BeReadyIlerna/BeReady">BeReady</a>
        </div>
        <!-- Copyright -->
    </footer>
@endsection
