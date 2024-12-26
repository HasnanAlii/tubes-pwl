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

        $cabangs = [
            'Jakarta', 'Bali', 'Cianjur', 'Bogor', 'Bandung'
            
        ];
       
            return [
                'name' => $this->faker->randomElement( $cabangs),
                'address' => $this->faker->address(),
                'phone' => $this->faker->phoneNumber(),
            ];
        
    
    }
}
