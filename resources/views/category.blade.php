@extends('templates.general')

@section('body')

    <section id="products" class="section-products">
        @include('templates.productList')
        
        <div class="justify-content-center d-flex text-center">
            {{$products->links() }}
        </div>
        
    </section>

    <section id="info" class="container text-center">
        <h2>Aprende sobre {{ucfirst($category->name)}}</h2>
        <p>{{$category->description}}</p>
    </section>

@endsection
