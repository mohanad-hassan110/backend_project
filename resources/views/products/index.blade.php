@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Our Products</h1>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
