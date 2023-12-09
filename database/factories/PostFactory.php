<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'published' => $this->faker->boolean,
            'title' => $this->faker->sentence,
            'page_text' => $this->faker->paragraph,
            'excerpt' => $this->faker->text(200),
            'slug' => $this->faker->slug,
            // 'created_at' and 'updated_at' will be automatically set by Eloquent
        ];
    } 
}
