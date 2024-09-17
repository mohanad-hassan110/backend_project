@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h1 class="text-center mb-5" style="color: #007BFF;">Our Featured Products</h1>

    <div class="row">

        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <!-- صورة المنتج -->
                    <img src="{{ asset('storage/products/' . $product->image_url) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #007BFF;">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text text-success">Price: ${{ $product->price }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-block">View Details</a>
                        <a href="{{ route('checkout', $product->id) }}" class="btn btn-success btn-block mt-2">Buy Now</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

</div>

@endsection
