<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // تأكد من أن `products` هو اسم جدول قاعدة البيانات الذي تستخدمه
    protected $table = 'products'; 
}
