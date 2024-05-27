<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'total_amount' => fake()->randomFloat(2, 10, 100),
            'status' => fake()->randomElement(['pending', 'completed', 'cancelled']),
        ];
    }
}
