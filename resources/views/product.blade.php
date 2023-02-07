@extends('templates.general')

@section('body')
    <section class="container d-grid my-5">
        <div class="row">
            <!--IMAGE-->
            <div class="col-lg-6 d-flex justify-content-end">
                <img class="product-image mt-4" src="{{URL::asset('img/'.$product->image)}}" alt="imagen del producto">
            </div>
            <!--INFO-->
            <aside class="col-lg-6">
                <!--PRESENTATION-->
                <h4>{{$product->name}}</h4>
                <p class="text-primary h4"><span class="h2 fw-bold">{{$product->total}}</span>€</p>
                <p class="text-muted">Vendido y enviado por BeReady</p>

                <!--FEATURES-->
                <div class="d-grid">
                    <div class="row mt-3">
                        <span class="fw-bold col-4">Marca: </span>
                        <span class="fw-normal text-muted col-8">{{substr($product->name, 0, strpos($product->name, " "))}}</span>
                    </div>
                    <div class="row mt-3">
                        <span class="fw-bold col-4">Descripción: </span>
                        <span class="fw-normal text-muted col-8">{{$product->description}}</span>
                    </div>
                    <div class="row mt-3">
                        <span class="fw-bold col-4">Envío: </span>
                        <span class="fw-bold text-success col-8">Envío GRATIS <a href="#"><i class="bi bi-info-circle-fill text-dark"></i></a></span>
                    </div>
                    <div class="row mt-3">
                        <span class="fw-bold col-4">Devolución: </span>
                        <span class="fw-bold text-success col-8">Devolución GRATIS <a href="#"><i class="bi bi-info-circle-fill text-dark"></i></a></span>
                    </div>
                </div>
            </aside>
        </div>
    </section>
@endsection