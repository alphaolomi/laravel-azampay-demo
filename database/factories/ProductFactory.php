<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'sku' => 'AZ' . $this->faker->unique()->numberBetween(100000, 999999),
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'quantity' => $this->faker->numberBetween(0, 100),
            'description' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->imageUrl(640, 480, 'products', true),
            'rating' => $this->faker->numberBetween(0, 5),
            'is_featured' => $this->faker->boolean(20),
            'is_published' => $this->faker->boolean(80),
        ];
    }
}
