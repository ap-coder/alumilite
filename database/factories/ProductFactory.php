<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'published' => $this->faker->boolean,
            'name' => $this->faker->word,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'msrp' => $this->faker->randomFloat(2, 0, 1000),
            'product_type_id' => \App\Models\ProductType::factory(),
            'slug' => $this->faker->slug,
            // 'created_at' and 'updated_at' will be automatically set by Eloquent
        ];
    }

    // Add any additional methods or states you require here
}