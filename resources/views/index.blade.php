@extends('templates.general')

@section('banner')
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
                <div class="col-md-8 col-lg-6">
                    <div class="header-popular">
                        <h3>Los más vendidos</h3>
                        <h2>Productos Destacados</h2>
                        <hr class="line-separator">
                    </div>
                </div>
            </div>


            <!-- Single Product -->
            @foreach ($products as $product)
                @if ($product->id === 1 || $product->id === 5)
                    <div class="row">
                @endif
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-{{ $product->id }}" class="single-product">
                        <div class="part-1 text-center">
                            {{-- <span class="discount">40% descuento</span> --}}
                            <img class="h-100 w-auto m-0" src={{ $product->image }} alt="imagen del producto">
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
                @if ($product->id === 4 || $product->id === 8)
                    </div>  
                @endif
                @endforeach
            {{-- <div class="justify-content-center d-flex text-center">
                {{ $products->links() }}
            </div> --}}


        {{-- 
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-1" class="single-product">
                        <div class="part-1 text-center">
                            <span class="discount">40% descuento</span>
                            <img class="h-100 w-auto m-0" src="./img/159-xiaomi-redmi-note-11s-6-128gb-gris-libre.webp"
                                alt="imagen del producto">
                            <ul>
                                <li><i id="cart-1" class="bi bi-cart" onclick="checkIcon('cart-1')"></i></li>
                                <li><i id="heart-1" class="bi bi-suit-heart" onclick="checkIcon('heart-1')"></i></li>
                                <li><i class="bi bi-fullscreen"
                                        onclick="popupImage('./img/productos/SatisfyerPro2.webp')"></i></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Xiaomi Redmi Note 11S 6/128GB Gris Libre</h3>
                            <h4 class="product-old-price">49.99€</h4>
                            <h4 class="product-price">29.99€</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-2" class="single-product">
                        <div class="part-1 text-center">
                            <span class="discount">46% descuento</span>
                            <img class="h-100 w-auto m-0" src="./img/126-apple-iphone-13-128gb-medianoche-libre.webp"
                                alt="imagen del producto">
                            <ul>
                                <li><i id="cart-2" class="bi bi-cart" onclick="checkIcon('cart-2')"></i></li>
                                <li><i id="heart-2" class="bi bi-suit-heart" onclick="checkIcon('heart-2')"></i></li>
                                <li><i class="bi bi-fullscreen"
                                        onclick="popupImage('./img/productos/MamboLavanda.webp')"></i></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Apple iPhone 13 128GB Medianoche Libre</h3>
                            <h4 class="product-old-price">49.99€</h4>
                            <h4 class="product-price">26.99€</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-3" class="single-product">
                        <div class="part-1 text-center">
                            <span class="new">new</span>
                            <img class="h-100 w-auto m-0"
                                src="./img/1193-samsung-galaxy-s23-ultra-256gb-algodon-libre-cargador-25w.webp"
                                alt="imagen del producto">
                            <ul>
                                <li><i id="cart-3" class="bi bi-cart" onclick="checkIcon('cart-3')"></i></li>
                                <li><i id="heart-3" class="bi bi-suit-heart" onclick="checkIcon('heart-3')"></i></li>
                                <li><i class="bi bi-fullscreen"
                                        onclick="popupImage('./img/productos/brillyglam_rabbit.png')"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Samsung Galaxy S23 Ultra 256GB Algodón Libre + Cargador 25W</h3>
                            <h4 class="product-price">69.95€</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-4" class="single-product">
                        <div class="part-1 text-center">
                            <span class="discount">33% descuento</span>
                            <img class="h-100 w-auto m-0" src="./img/1752-samsung-galaxy-tab-s8-5g-128gb-gris-oscuro.webp"
                                alt="imagen del producto">
                            <ul>
                                <li><i id="cart-4" class="bi bi-cart" onclick="checkIcon('cart-4')"></i></li>
                                <li><i id="heart-4" class="bi bi-suit-heart" onclick="checkIcon('heart-4')"></i></li>
                                <li><i class="bi bi-fullscreen"
                                        onclick="popupImage('./img/productos/zumba_masturbador.webp')"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Samsung Galaxy Tab S8 5G 128GB Gris Oscuro</h3>
                            <h4 class="product-old-price">44.99€</h4>
                            <h4 class="product-price">29.99€</h4>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-5" class="single-product">
                        <div class="part-1 text-center">
                            <img class="h-100 w-auto m-0 text-center"
                                src="./img/1533-kioxia-exceria-g2-unidad-ssd-1tb-nvme-m2-2280.webp"
                                alt="imagen del producto">
                            <ul>
                                <li><i id="cart-5" class="bi bi-cart" onclick="checkIcon('cart-5')"></i></li>
                                <li><i id="heart-5" class="bi bi-suit-heart" onclick="checkIcon('heart-5')"></i></li>
                                <li><i class="bi bi-fullscreen"
                                        onclick="popupImage('./img/productos/Lelo_control_remoto.jpg')"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Kioxia Exceria G2 Unidad SSD 1TB NVMe M.2 2280</h3>
                            <h4 class="product-price">178.99€</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-6" class="single-product">
                        <div class="part-1 text-center">
                            <span class="new">new</span>
                            <img class="h-100 w-auto m-0" src="./img/1157-msi-geforce-rtx-3060-ventus-2x-oc-12gb-gddr6.webp"
                                alt="imagen del producto">
                            <ul>
                                <li><i id="cart-6" class="bi bi-cart" onclick="checkIcon('cart-6')"></i></li>
                                <li><i id="heart-6" class="bi bi-suit-heart" onclick="checkIcon('heart-6')"></i></li>
                                <li><i class="bi bi-fullscreen"
                                        onclick="popupImage('./img/productos/liebe_lubricante.webp')"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">MSI GeForce RTX 3060 VENTUS 2X OC LHR 12GB GDDR6</h3>
                            <h4 class="product-price">6.99€</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-7" class="single-product">
                        <div class="part-1 text-center">
                            <span class="discount">30% descuento</span>
                            <img class="h-100 w-auto m-0" src="./img/1636-intel-core-i5-12400f-44-ghz.webp"
                                alt="imagen del producto">
                            <ul>
                                <li><i id="cart-7" class="bi bi-cart" onclick="checkIcon('cart-7')"></i></li>
                                <li><i id="heart-7" class="bi bi-suit-heart" onclick="checkIcon('heart-7')"></i></li>
                                <li><i class="bi bi-fullscreen" onclick="popupImage('./img/productos/Esposas.webp')"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Intel Core i5-12400F 2.5 GHz</h3>
                            <h4 class="product-old-price">14.99€</h4>
                            <h4 class="product-price">10.49€</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-8" class="single-product">
                        <div class="part-1 text-center">
                            <span class="discount">48% descuento</span>
                            <img class="h-100 w-auto m-0"
                                src="./img/1955-kingston-fury-beast-ddr5-5200mhz-32gb-2x16gb-cl40.webp"
                                alt="imagen del producto">
                            <ul>
                                <li><i id="cart-8" class="bi bi-cart" onclick="checkIcon('cart-8')"></i></li>
                                <li><i id="heart-8" class="bi bi-suit-heart" onclick="checkIcon('heart-8')"></i></li>
                                <li><i class="bi bi-fullscreen"
                                        onclick="popupImage('./img/productos/lovense-vibrador.webp')"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Kingston FURY Beast DDR5 5200MHz 32GB 2x16GB CL40</h3>
                            <h4 class="product-old-price">228.99€</h4>
                            <h4 class="product-price">118.99€</h4>
                        </div>
                    </div>
                </div>

            </div> --}}

        </div>

        
    </section>
@endsection
