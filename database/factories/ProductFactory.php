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
            'nombre' => $this->faker->unique()->sentence(1),
            'referencia' => $this->faker->sentence(2),
            'precio' => $this->faker->randomNumber(4, true),
            'peso' => $this->faker->randomNumber(2, true),
            'categoria' => $this->faker->randomElement(['categoria 1','categoria 2','categoria 3']),
            'stock' => $this->faker->randomNumber(2, true),
            'fecha_ultimaventa' => now(),
        ];
    }
}
