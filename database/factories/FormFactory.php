<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form>
 */
class FormFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'username' => fake()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make(fake()->password()),
            'alamat' => fake()->address(),
            'provinsi' => 'Kalimantan Selatan',
            'negara' => 'Indonesia',
            'kode_post' => fake()->postcode(),
            'handphone' => fake()->phoneNumber(),
            'captcha' => 'Bukan Robot',
        ];
    }
}
