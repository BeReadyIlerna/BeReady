<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <title>BeReady</title>
</head>

<body>
    <div class="mx-auto ">

        <header id="header-pc" class="sticky-lg-top">
            <!-- Logo Navbar PC & Tablet -->
            <nav class="navbar navbar-expand-lg bg-white d-none d-md-block">
                <div class="container-fluid justify-content-center ">
                    <a href="./index.html">
                        <img class="nav-logo" src="" alt="logo beready">
                    </a>
                </div>
            </nav>

            <!-- Menu -->
            <nav class="navbar navbar-expand-md bg-white mt-sm-0" aria-label="Tenth navbar example">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Logo navbar mobile -->
                    <a href="./index.html">
                        <img class="nav-logo d-block d-md-none my-auto" src="" alt="logo beready">
                    </a>

                    <div class="collapse navbar-collapse justify-content-md-center" id="mobile-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-hover-white" aria-current="page" href="./index.html"><i
                                        class="bi bi-house-fill"></i>Inicio</a>
                            </li>

                            <li class="nav-item dropdown d-flex">
                                <a class="nav-link dropdown-toggle text-black text-hover-white" href="#"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bi bi-star-fill"></i>Productos</a>
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

                            <li class="nav-item dropdown d-flex position-relative">
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
                                    {{-- <li id="empty-cart">
                                        <a class="dropdown-item mx-0 px-2 d-flex text-hover-white " href="#">
                                            No has añadido nada aún
                                        </a>
                                    </li>
                                    <li id="cart-product-1" hidden="true">
                                        <a class="dropdown-item mx-0 px-2 d-flex text-hover-white " hidden
                                            href="#"><img class="d-flex img-cart"
                                                src="./img/productos/satisfyer-min.webp">29.99€ - Satisfyer Pro 2</a>
                                    </li>
                                    <li id="cart-product-2" hidden="true">
                                        <a class="dropdown-item mx-0 px-2 d-flex text-hover-white" href="#"><img
                                                class="d-flex img-cart" src="./img/productos/mambo-min.webp">26.99€ -
                                            Platanomelón Mambo</a>
                                    </li>
                                    <li id="cart-product-3" hidden="true">
                                        <a class="dropdown-item mx-0 px-2 d-flex text-hover-white" href="#"><img
                                                class="d-flex img-cart" src="./img/productos/brillyglam-min.webp">69.95€
                                            - Brilly Glam Rabbit</a>
                                    </li>
                                    <li id="cart-product-4" hidden="true">
                                        <a class="dropdown-item mx-0 px-2 d-flex text-hover-white" hidden
                                            href="#"><img class="d-flex img-cart"
                                                src="./img/productos/zumba-min.webp">29.99€ - Platanomelón Zumba</a>
                                    </li>
                                    <li id="cart-product-5" hidden="true">
                                        <a class="dropdown-item mx-0 px-2 d-flex text-hover-white" href="#"><img
                                                class="d-flex img-cart"
                                                src="./img/productos/lelo-bolas-min.webp">178.99€ - Lelo Bolas Control
                                            Remoto</a>
                                    </li>
                                    <li id="cart-product-6" hidden="true">
                                        <a class="dropdown-item mx-0 px-2 d-flex text-hover-white" href="#"><img
                                                class="d-flex img-cart" src="./img/productos/liebe-min.webp">6.99€ -
                                            Liebe Lubricantes</a>
                                    </li>
                                    <li id="cart-product-7" hidden="true">
                                        <a class="dropdown-item mx-0 px-2 d-flex text-hover-white" href="#"><img
                                                class="d-flex img-cart" src="./img/productos/esposas-min.webp">10.49€
                                            - Esposas Peluche Ted</a>
                                    </li>
                                    <li id="cart-product-8" hidden="true">
                                        <a class="dropdown-item mx-0 px-2 d-flex text-hover-white" href="#"><img
                                                class="d-flex img-cart" src="./img/productos/lush-min.webp">118.99€ -
                                            Lovesense Lush 3</a>
                                    </li>
                                    <li id="btn-gocart" hidden="true" class="text-center">
                                        <a class="link-view-cart" href="./html/cartPage.html">Ver mi cesta</a>
                                    </li> --}}
                                </ul>
                            </li>

                            <div>
                                <li class="nav-item d-flex position-relative">
                                    <a class="nav-link text-black text-hover-white" href="#"
                                        aria-expanded="false">
                                        <i class="bi bi-heart-fill">
                                            <span id="badge-love"
                                                class="position-absolute top-0 start-0 translate-middle badge rounded-pill badge-cart"
                                                hidden="true">
                                                1
                                            </span>
                                        </i>
                                        Lista de deseados
                                    </a>
                                </li>
                            </div>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>

    </div>
</body>

</html>
