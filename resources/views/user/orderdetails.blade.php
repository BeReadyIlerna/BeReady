@extends('templates.user')

@section('title')
    BeReady - Pedido {{ $order->id }}
@endsection

@section('userContent')
    <div class="container-fluid">
        <h1>Nº Pedido: {{ $order->id }}</h1>
        <h6>Fecha: {{ $order->created_at }}</h6>
        <h6>Importe: {{ $order->total }}€</h6>
        <h6>Productos:</h6>
    </div>
    <div class="container-fluid">
        @foreach ($products as $product)
            <div class="col-6 mb-3 w-50">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ URL::asset('img/' . $product->image) }}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title">{{ $product->name }}</h6>
                            <h5 class="card-title text-primary">{{ $product->price }}€/Ud</h5>
                            <h6 class="card-title">Cantidad: </h6>
                            <p class="card-text"><small class="text-muted">{{ $product->category->name }}</small></p>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
