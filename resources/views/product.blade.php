@extends('templates.general')

@section('body')
    <section class="container d-grid">
        <div class="col-6">
            <img src="{{URL::asset('img/'.$product->image)}}" alt="imagen del producto">
        </div>
        <article class="col-6">

        </article>
    </section>
@endsection