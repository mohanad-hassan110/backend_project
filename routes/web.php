<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CheckoutController;

// مسار الصفحة الرئيسية
Route::get('/', [HomeController::class, 'index'])->name('home');

// مسار عرض المنتجات
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// مسار صفحة الحجز
Route::get('/booking', [BookingController::class, 'form'])->name('booking.form');

// مسار صفحة الدفع
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');

Route::post('/booking/process', [BookingController::class, 'process'])->name('booking.process');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

use App\Http\Controllers\PaymentController;

Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
