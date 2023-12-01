<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created_at = fake()->dateTimeBetween('-1 year');
        return [
            'fullname' => fake()->unique()->name,
            'email' => fake()->unique()->safeEmail,
            'password' => Hash::make(fake()->unique()->password),
            'photo' => fake()->unique()->imageUrl,
            'created_at' => $created_at,
            'updated_at' => $created_at
        ];
    }
}
