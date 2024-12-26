<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Cabang;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        // Pilihan nama makanan dan minuman
        $products = [
            'Nasi Goreng', 'Sate Ayam', 'Mie Goreng', 'Bakso', 
            'Es Teh', 'Es Jeruk', 'Kopi Hitam', 'Teh Panas', 
            'Sop Buntut', 'Ayam Geprek', 'Rendang', 'Gado-Gado', 
            'Soto Ayam', 'Es Campur', 'Jus Alpukat', 'Jus Mangga'
        ];

        return [
            'cabang_id' => Cabang::inRandomOrder()->first()->id, 
            'name' => $this->faker->randomElement($products),
            'sku' => $this->faker->unique()->regexify('[A-Z0-9]{5}'), 
            'price' => $this->faker->numberBetween(10, 50), 
            'stock' => $this->faker->numberBetween(0, 200), 
            'stock_min' => $this->faker->numberBetween(50, 60), 
        ];
    }
}
