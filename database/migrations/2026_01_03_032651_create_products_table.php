<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // khóa chính
            $table->string('name'); // tên sản phẩm
            $table->string('slug')->unique(); // đường dẫn thân thiện
            $table->text('description')->nullable(); // mô tả sản phẩm
            $table->decimal('price', 10, 2); // giá sản phẩm
            $table->integer('quantity')->default(0); // số lượng sản phẩm
            $table->string('image')->nullable(); // hình ảnh sản phẩm
            $table->boolean('status')->default(1); // trạng thái sản phẩm
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
