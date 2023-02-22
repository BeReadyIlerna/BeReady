@extends('templates.general')

@section('title')
    BeReady - {{$product->name}}
@endsection

@section('body')
    <section class="container d-grid py-5 mb-5">
        <div class="row">
            <!--IMAGE-->
            <div class="col-lg-6 d-flex justify-content-end">
                <img class="product-image mt-4" src="{{ URL::asset('img/' . $product->image) }}" alt="imagen del producto">
            </div>
            <!--INFO-->
            <aside class="col-lg-6">
                <!--PRESENTATION-->
                <h3>{{ $product->name }}</h3>
                <p class="text-primary h4"><span class="h2 fw-bold">{{ $product->total }}</span>€</p>
                <p class="text-muted">Vendido y enviado por BeReady</p>

                <!--FEATURES-->
                <div class="d-grid">
                    <div class="row mt-4">
                        <span class="fw-bold col-4">Marca: </span>
                        <span
                            class="fw-normal text-muted col-8">{{ substr($product->name, 0, strpos($product->name, ' ')) }}</span>
                    </div>
                    <div class="row mt-4">
                        <span class="fw-bold col-4">Descripción: </span>
                        <span class="fw-normal text-muted col-8">{{ $product->description }}</span>
                    </div>

                    <!--FORM-->
                    <form action="{{ route('cart.addProduct') }}" method="POST">
                        @csrf
                        <!--QUANTITY-->
                    <div class="row mt-4">
                        <span class="fw-bold col-4 align-self-center">Cantidad: </span>
                        <span class="fw-normal col-8">
                            <div class="d-flex mb-md-0">
                                <button class="btn px-2" type="button"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="bi bi-dash-lg"></i>
                                </button>

                                <input id="form1" min="1" max="99" name="quantity" value="1" type="number"
                                    class="form-control form-control-sm product-quantity-width text-center" />

                                <button class="btn px-2" type="button"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                            </div>
                        </span>
                    </div>
                    <input id="form1" name="product" value="{{$product->id}}" hidden />
                    <!--ADD SHOPPING CART-->
                    <div class="row mt-4">
                        <button class="btn btn-primary p-3 col-5" type="submit"><h5 class="m-0">Añadir al carrito</h5></button>
                    </div>
                    </form>
                    
                    <div class="row mt-4">
                        <span class="fw-bold col-4">Envío: </span>
                        <span class="fw-bold text-success col-8">Envío GRATIS <a href="#"><i
                            class="bi bi-info-circle-fill text-dark"></i></a></span>
                    </div>
                    <div class="row mt-4">
                        <span class="fw-bold col-4">Devolución: </span>
                        <span class="fw-bold text-success col-8">Devolución GRATIS <a href="#"><i
                                    class="bi bi-info-circle-fill text-dark"></i></a></span>
                    </div>
                </div>
            </aside>
        </div>
    </section>
@endsection
