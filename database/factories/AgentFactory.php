<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      
        return [
            //
            'nik' => $this->faker->nik(),
            'name' => $this->faker->unique()->name(),
            'sex' => $this->faker->randomElement(['Pria', 'Wanita']),
            'email' => $this->faker->unique()->safeEmail(),
            'birthdate' => $this->faker->date(),
            'address' => $this->faker->ity(),
            'whatsapp' => $this->faker->unique()->e164PhoneNumber(),
            'instagram' => $this->faker->lexify(),
            'photo_path' => '/uploaded_images/zacky.jpg',
        ];
    }
}
