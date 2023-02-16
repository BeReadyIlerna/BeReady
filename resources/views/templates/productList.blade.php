        <!-- Single Product -->
        @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div id="product-{{ $product->id }}" class="single-product">
                    <div class="part-1 text-center bg-image hover-zoom">
                        {{-- <span class="discount">40% descuento</span> --}}
                        <a href="product/{{ $product->id }}"><img class="h-100 w-auto m-0"
                                src={{ URL::asset('img/' . $product->image) }} alt="imagen del producto"></a>
                        <ul>
                            <li><i id="cart-{{ $product->id }}" class="bi bi-cart"
                                    onclick="checkIcon('cart-{{ $product->id }}')"></i></li>
                            <li><i id="heart-{{ $product->id }}" class="bi bi-suit-heart"
                                    onclick="checkIcon('heart-{{ $product->id }}')"></i></li>
                            <li><i class="bi bi-fullscreen" onclick="popupImage({{ URL::asset('img/' . $product->image) }})"></i></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">{{ $product->name }}</h3>
                        {{-- <h4 class="product-old-price">49.99€</h4> --}}
                        <h4 class="product-price">{{ $product->total }}€</h4>
                    </div>
                </div>
            </div>

            <!-- Popup expand images -->
            <div id="div-popup" class="img-popup">
                <img id="insert-img" alt="Popup Image">
                <div class="close-btn" onclick="closePopup()">
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
        @endforeach
