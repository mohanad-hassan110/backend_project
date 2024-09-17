@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Book Your Product</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">Booking Information</div>
                <div class="card-body">
                    <form action="{{ route('booking.process') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="email">Your Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="date">Booking Date</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="product">Product</label>
                            <select name="product_id" class="form-control" required>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 btn-block">Submit Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
