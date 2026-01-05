<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;

    public function definition(): array
    {
        $name = $this->faker->words(3, true);
        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'quantity' => $this->faker->numberBetween(1, 100),
            'image' => 'product-' . $this->faker->numberBetween(1, 10) . '.jpg',
            'status' => $this->faker->boolean(90), // 90% là active
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function outOfStock()
    {
        return $this->state(fn () => [
            'quantity' => 0,
            'status' => 0,
        ]);
    }
}
