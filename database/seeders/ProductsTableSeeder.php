<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo 50bản ghi sản phẩm giả lập
        Product::factory(50)->create();

        // Xóa dữ liệu cũ
        // Product::truncate();

        // Tạo một số sản phẩm hết hàng
        // Product::factory()->count(5)->outOfStock()->create();
    }
}
