@extends('templates.general')

@section('title')
    BeReady - Mi cesta
@endsection

@section('body')
    <section class="h-100 bg content-cart">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black"><i class="bi bi-cart-fill"></i> Mi cesta
                                            </h1>
                                            <h6 class="mb-0 text-muted">{{ count($products) }} Artículos</h6>
                                        </div>
                                        <hr class="my-4">

                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        @foreach ($products as $product)
                                            <!-- Product -->
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <a href="{{ route('product') . '/' . $product->id }}"><img
                                                            src="{{ URL::asset('img/' . $product->image) }}"
                                                            class="img-fluid rounded-3" alt="imagen del producto"></a>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3 mb-3 mb-md-0">
                                                    <h6 class="text-black">{{ $product->name }}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex mb-3 mb-md-0">

                                                    <a href="{{ route('user.cartProductSub') . '/' . $product->id }}"><button
                                                            class="btn px-2">
                                                            <i class="bi bi-dash-lg"></i>
                                                        </button></a>

                                                    <input id="form1" min="1" name="quantity"
                                                        value="{{ $product->pivot->quantity }}" type="number"
                                                        class="form-control form-control-sm text-center" disabled />

                                                    <a href="{{ route('user.cartProductSum') . '/' . $product->id }}"><button
                                                            class="btn px-2">
                                                            <i class="bi bi-plus-lg"></i>
                                                        </button></a>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">{{ $product->total * $product->pivot->quantity }} €
                                                    </h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="{{ route('user.cartDelete') . '/' . $product->id }}"
                                                        class="text-muted"><i class="bi bi-trash-fill"></i></a>
                                                </div>
                                            </div>

                                            <hr class="my-4">
                                        @endforeach

                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="{{ route('index') }}" class="text-body"><i
                                                        class="bi bi-arrow-left me-2"></i>Volver</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Resumen</h3>
                                        <hr class="my-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <h5>Subtotal</h5>
                                            <h5 id="precioSubtotal">{{ $totalPrice }}</h5>
                                        </div>

                                        <h5 class="mb-3">Código promocional</h5>
                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2" class="form-control"
                                                    placeholder="Introduce tu código" />
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">TOTAL COMPRA</h5>
                                            <h5 id="precioTotal">€</h5>
                                        </div>

                                        <script>
                                            let select = document.getElementById("selectEnvio");
                                            let precioTotal = document.getElementById("precioTotal");
                                            let subtotal = document.getElementById("precioSubtotal").innerHTML;
                                            subtotal = subtotal.substring(0, subtotal.length - 1);

                                            let total = null;

                                            select.addEventListener("change", function() {
                                                total = select.value == 2 ? +subtotal + 10 + "€" : +subtotal + 4 + "€"

                                                precioTotal.innerHTML = total;
                                            });

                                            window.onload = function() {
                                                precioTotal.innerHTML = +subtotal + 4 + "€";
                                            }
                                        </script>

                                        <form action="{{ route('user.makeOrder') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-block btn-lg btn-micesta"
                                                {{ Auth::user()->role == 'admin' ? 'disabled' : '' }}>
                                                <h5>Tramitar pedido</h5>
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
