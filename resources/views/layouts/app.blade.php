<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom CSS -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Commerce Website')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (اختياري، للوظائف التفاعلية مثل القوائم المنسدلة) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('home') }}">My E-Commerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('booking.form') }}">Book a Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('checkout') }}">Checkout</a> <!-- حذف معرف المنتج -->
      </li>
    </ul>
  </div>
</nav>

    <!-- Main content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
      <div class="text-center p-3" style="background-color: #f1f1f1;">
        © 2024 My E-Commerce Website. All Rights Reserved.
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
