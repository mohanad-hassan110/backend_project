@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="text-center">Checkout</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Payment Information</div>

                <div class="card-body">
                    <form action="{{ route('payment.process') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="card_number">Card Number</label>
                            <input type="text" name="card_number" class="form-control" placeholder="Enter card number" required>
                        </div>

                        <div class="form-group">
                            <label for="card_name">Name on Card</label>
                            <input type="text" name="card_name" class="form-control" placeholder="Enter cardholder name" required>
                        </div>

                        <div class="form-group">
                            <label for="expiry_date">Expiry Date</label>
                            <input type="text" name="expiry_date" class="form-control" placeholder="MM/YY" required>
                        </div>

                        <div class="form-group">
                            <label for="cvv">CVV</label>
                            <input type="text" name="cvv" class="form-control" placeholder="CVV" required>
                        </div>

                        <button type="submit" class="btn btn-success btn-block mt-3">Pay Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
