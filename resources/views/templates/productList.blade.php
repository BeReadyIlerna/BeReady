        <!-- Single Product -->
        @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div id="product-{{ $product->id }}" class="single-product">
                    <div class="part-1 text-center bg-image hover-zoom">
                        {{-- <span class="discount">40% descuento</span> --}}
                        <a href="product/{{ $product->id }}"><img class="h-100 w-auto m-0 insert-img"
                                src={{ URL::asset('img/' . $product->image) }} alt="imagen del producto"></a>
                        <ul>
                            <form action="{{ route('cart.addProduct') }}" method="POST" id="productToCart">
                                @csrf
                                <input id="form1" name="product" value="{{ $product->id }}" hidden />
                                <li class="hover-shadow">
                                    <button class="icon-btn" type="submit">
                                        <i id="cart-{{ $product->id }}" class="bi bi-cart "></i>
                                    </button>
                                </li>
                                <li class="hover-shadow"><i class="bi bi-fullscreen"
                                        onclick="popupImage('{{ URL::asset('img/' . $product->image) }}')"></i></li>
                            </form>
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
                <div class="d-inline-flex ">
                    <img id="insert-img" alt="Popup Image">
                    <div class="close-btn">
                        <i class="bi bi-x-lg" onclick="closePopup()"></i>
                    </div>
                </div>
            </div>
        @endforeach
