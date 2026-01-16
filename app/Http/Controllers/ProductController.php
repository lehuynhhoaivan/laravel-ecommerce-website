<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {

    // DB::table('products')->insert([
    //     [   'name' => 'Sản phẩm 1',
    //         'slug' => 'san-pham-1',
    //         'description' => 'Mô tả sản phẩm 1',
    //         'price' => 150000,
    //         'quantity' => 20,
    //         'image' => 'product-new1.jpg',
    //         'status' => 1,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ],[
    //         'name' => 'Sản phẩm 2',
    //         'slug' => 'san-pham-2',
    //         'description' => 'Mô tả sản phẩm 2',
    //         'price' => 200000,
    //         'quantity' => 15,
    //         'image' => 'product-new2.jpg',
    //         'status' => 1,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]    
    // ]);
    //     dd('Đã thêm sản phẩm mới');
    //     $products = Product::all();

        // return DB::table('products')->where('id', 53)->get();
        DB::table('products')->where('id', 53)->update([
            'name' => 'Sản phẩm cập nhật 53',
            'slug' => 'san-pham-cap-nhat-53',
            'description' => 'Mô tả sản phẩm cập nhật 53',
            'price' => 175000,
            'quantity' => 30,
            'image' => 'product-update53.jpg',
            'status' => 1,
            'updated_at' => now(),
        ]);
        dd('Đã cập nhật sản phẩm có ID = 53');
        $products = Product::all();
        
        // Query Builder: Lấy tất cả sản phẩm từ bảng products
        // return DB::table('products')->get();

        // Eloquent ORM: Lấy tất cả sản phẩm từ model Product
        // return Product::all();

        // Query Builder: Lấy trường status và có điều kiện
        // return DB::table('products')->where('status', 0)->get();

        // Eloquent ORM: Lấy trường status và có điều kiện
        // return Product::where('status', 1)->get();

        // Eloquent ORM: Lấy sản phẩm có price > 50000 và status = 1
        // return Product::where('price', '>', 50000)
        //                 ->where('status', 0)
        //                 ->get();

        return view('product.index', ['products' => $products]);
    }
}
