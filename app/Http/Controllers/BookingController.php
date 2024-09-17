<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function form()
    {
        $products = Product::all(); // احصل على جميع المنتجات
        return view('booking', compact('products')); // عرض الصفحة booking
    }
}
