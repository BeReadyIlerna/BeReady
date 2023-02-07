@extends('templates.template')

@section('navbar')
    <header id="header-pc" class="sticky-lg-top">
        <!-- Logo Navbar PC & Tablet -->
        <nav class="navbar navbar-expand-lg bg-white d-none d-md-block">
            <div class="container-fluid justify-content-center ">
                <a href={{ route('index') }}>
                    <img class="nav-logo" src="{{URL::asset('img/beready-logo.png')}}" alt="logo beready">
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
                                <a class="nav-link text-black text-hover-white" href={{Route('login')}} aria-expanded="false"><i
                                        class="bi bi-person-fill"></i> Mi cuenta</a>
                            </li>
                        </div>

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
          © 2022 Copyright:
          <a class="text-reset fw-bold" href="https://github.com/BeReadyIlerna/BeReady"
            >BeReady</a
          >
        </div>
        <!-- Copyright -->
      </footer>
@endsection