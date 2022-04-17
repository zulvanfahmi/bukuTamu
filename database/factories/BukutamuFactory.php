<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukutamuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name($gender = 'female'),
            'jeniskelamin' => 'Perempuan',
            'alamat' => $this->faker->address(),
            'nohp' => $this->faker->phoneNumber(),
            'keperluan' => $this->faker->paragraph(1),
        ];
    }
}
