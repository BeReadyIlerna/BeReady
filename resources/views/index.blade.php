@extends('templates.general')

@section('title')
    BeReady - Inicio
@endsection

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
                <img src="{{ URL::asset('img/banner.webp') }}" class="w-100 d-block" alt="imagen del carrusel" />
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('img/banner.webp') }}" class="w-100 d-block" alt="imagen del carrusel" />
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('img/sanvalentin2.webp') }}" class="w-100 d-block" alt="imagen del carrusel" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next"></span>
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
                    <h3>Los más nuevos</h3>
                    <h2>Novedades</h2>
                    <hr class="line-separator">
                </div>
                @include('templates.productList')
            </div>
        </div>
    </section>
@endsection
