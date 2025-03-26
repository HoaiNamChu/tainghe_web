<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariant>
 */
class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'variant_attribute' => $this->faker->text(10),
            'variant_value' => $this->faker->text(10),
            'price' => $this->faker->randomFloat(2, 10),
            'discount_price' => $this->faker->randomFloat(2, 10),
            'stock' => $this->faker->randomFloat(2, 10),
        ];
    }
}
