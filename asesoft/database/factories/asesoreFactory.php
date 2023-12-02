<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\asesore>
 */
class asesoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->name(),
            'apellido'=> $this->faker->lastName(),
            'correo'=> fake()->unique()->safeEmail(),
            'password'=> $this->faker->password(),
            'id_tienda'=> $this->faker->colorName(),
        ];
    }
}
