<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(rand(1,2)),
            'category_id'=> rand(1,3),
            'description' => $this->faker->paragraph(rand(2,3)),
            'price' => 10000000,
            'photo' => 'https://picsum.photos/id/1005/400/250',
        ];
    }
}
