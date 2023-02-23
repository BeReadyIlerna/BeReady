@extends('templates.user')

@section('title')
    BeReady - Pedidos
@endsection

@section('userContent')
    <div class="container-fluid">
        <h1>Pedidos</h1>
    </div>
    <div class="col py-3 ">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Total del pedido</th>
                    <th scope="col">Ver pedido</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td scope='row'>{{ $order->id }}</td>
                        <td>{{ $order->total }}€</td>
                        <td><a href='orders/{{ $order->id }}'><button type="button" class="btn-primary btn-sm"><i
                                        class="bi bi-eye fs-5"></i></button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
