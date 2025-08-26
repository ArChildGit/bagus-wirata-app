<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'date' => $this->faker->date(),
            'location' => $this->faker->city,
            'ticket_price' => $this->faker->randomFloat(2, 10, 500),
            'user_id' => User::factory(), // otomatis bikin user
        ];
    }
}

