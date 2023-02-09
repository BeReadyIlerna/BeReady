@extends('templates.general')

@section('body')

    <section id="products" class="section-products">
        <div class="container">
            <div class="row justify-content-center text-center">
                
                    <div class="header-popular">
                        <h2>{{ucfirst($categoryName)}}</h2>
                        <hr class="line-separator">
                    </div>
                    <!-- Single Product -->
                    @foreach ($products as $product)
                       
                       
                        <div class="col-lg-3 col-md-6 col-sm-12 ">
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
                @endforeach
                </div>
            </div>


        <div class="justify-content-center d-flex text-center">
            {{$products->links() }}
        </div>

        </div>

    </section>
@endsection
