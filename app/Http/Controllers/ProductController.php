<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {

        // Query Builder: Lấy tất cả sản phẩm từ bảng products
        // return DB::table('products')->get();

        // Eloquent ORM: Lấy tất cả sản phẩm từ model Product
        // return Product::all();

        // Query Builder: Lấy trường status và có điều kiện
        // return DB::table('products')->where('status', 0)->get();

        // Eloquent ORM: Lấy trường status và có điều kiện
        // return Product::where('status', 1)->get();

        // Eloquent ORM: Lấy sản phẩm có price > 50000 và status = 1
        return Product::where('price', '>', 50000)
                        ->where('status', 0)
                        ->get();
        return view('product.index');
    }
}
