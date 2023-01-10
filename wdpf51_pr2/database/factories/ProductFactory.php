<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->name('product'),
            'product_details' => $this->faker->paragraph(),
            'product_price' => $this->faker->randomDigit(),
            'product_image' => $this->faker->imageUrl($width = 200, $height = 200),
            'product_category' => $this->faker->randomDigit(),




        ];
    }
}
