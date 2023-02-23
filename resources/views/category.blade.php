@extends('templates.general')

@section('title')
    BeReady - {{ $category->name }}
@endsection

@section('body')
    <section id="products" class="section-products">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="header-popular">
                    <h2>{{ $category->name }}</h2>
                    <p>{{ $category->description }}</p>
                    <hr class="line-separator">
                </div>
                @include('templates.productList')
            </div>
        </div>

        <div class="justify-content-center d-flex text-center">
            {{ $products->links() }}
        </div>

    </section>
@endsection
