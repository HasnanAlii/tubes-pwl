<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cabang>
 */
class CabangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $usedCabangs = []; 

        $cabangs = [
            'Jakarta', 'Bali', 'Cianjur', 'Bogor', 'Bandung'
        ];

        $availableCabangs = array_diff($cabangs, $usedCabangs);

        if (empty($availableCabangs)) {
            throw new \Exception("All cabang names have been used!");
        }

       
        $name = $this->faker->randomElement($availableCabangs);

       
        $usedCabangs[] = $name;

        return [
            'name' => $name,
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
