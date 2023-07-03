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
            'category_id'=>rand(1,3),
            'name'=>[
                'uz'=>fake()->sentence(3),
                'en'=>"Hello World",
            ],
            'price'=>rand(1000,10000),
            'description'=>[
                'uz'=>fake()->paragraph(1),
                'en'=>'my first description in this code it is amazing to me by'
            ]

        ];
    }
}
