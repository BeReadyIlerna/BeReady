@extends('templates.general')

@section('banner')
    <!-- TODO cambiar ruta de las imágenes -->
    <!--Carrusel de imágenes-->
    <div id="carouselId" class="carousel slide border-bottom" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide">
            </li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="./img/banner.webp" class="w-100 d-block" alt="imagen del carrusel" />
            </div>
            <div class="carousel-item">
                <img src="./img/sanvalentin.webp" class="w-100 d-block" alt="imagen del carrusel" />
            </div>
            <div class="carousel-item">
                <img src="./img/sanvalentin2.webp" class="w-100 d-block" alt="imagen del carrusel" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection

@section('body')
    <!-- Contenido -->
    <section id="products" class="section-products">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="header-popular">
                    <h3>Los más vendidos</h3>
                    <h2>Productos Destacados</h2>
                    <hr class="line-separator">
                </div>
                <!-- Single Product -->
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-12 ">
                        <div id="product-{{ $product->id }}" class="single-product">
                            <div class="part-1 text-center">
                                {{-- <span class="discount">40% descuento</span> --}}
                                <a href="product/{{$product->id}}"><img class="h-100 w-auto m-0" src={{ $product->image }} alt="imagen del producto"></a>
                                <ul>
                                    <li><i id="cart-{{ $product->id }}" class="bi bi-cart"
                                            onclick="checkIcon('cart-{{ $product->id }}')"></i></li>
                                    <li><i id="heart-{{ $product->id }}" class="bi bi-suit-heart"
                                            onclick="checkIcon('heart-{{ $product->id }}')"></i></li>
                                    <li><i class="bi bi-fullscreen" onclick="popupImage({{ $product->image }})"></i></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title">{{ $product->name }}</h3>
                                {{-- <h4 class="product-old-price">49.99€</h4> --}}
                                <h4 class="product-price">{{ $product->total }}€</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    </section>
@endsection
