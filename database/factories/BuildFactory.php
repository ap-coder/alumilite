<?php

namespace Database\Factories;

use App\Models\Build;
use App\Models\Brand;
use App\Models\BrandModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Build>
 */
class BuildFactory extends Factory
{
    protected $model = Build::class;

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
            'subtitle' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'brand_id' => Brand::inRandomOrder()->first()->id ?? Brand::factory(),
            'brand_model_id' => BrandModel::inRandomOrder()->first()->id ?? BrandModel::factory(),
            'timeframe' => $this->faker->word,
            'slug' => $this->faker->slug,
            'customer_company' => $this->faker->company,
            'customer_name' => $this->faker->name,
            'customer_link' => $this->faker->url,
            'customer_website' => $this->faker->domainName,
            // 'created_at' and 'updated_at' will be automatically set by Eloquent
        ];
    } 
}
