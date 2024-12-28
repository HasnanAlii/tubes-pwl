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
        $products = [
            'Indomie Goreng', 'Indomie Kuah', 'Mie Sedap', 'Sereal Kellogg\'s', 
            'Teh Botol Sosro', 'Sprite', 'Coca Cola', 'Pepsi', 
            'Pocari Sweat', 'Fanta', 'Nestle Pure Life', 'Aqua', 
            'Cimory Yoghurt', 'Coca Cola Zero', 'Hershey\'s Chocolate', 
            'Mentos', 'Lays', 'Pringles', 'Kacang Garuda', 'Kacang Polong', 
            'Chitato', 'Taro', 'Lemon Tea', 'Kopi Luwak', 
            'Gula Pasir', 'Garam', 'Tepung Terigu', 'Roti Tawar', 
            'Keju Cheddar', 'Susu Ultra Milk', 'Susu Indomilk', 'Nestle Milo', 
            'Susu Evaporasi', 'Margarine Blue Band', 'Selai Stroberi', 'Selai Nanas', 
            'Saos Tomat ABC', 'Saos Sambal ABC', 'Saus Mayones', 'Tepung Maizena', 
            'Kecap Manis ABC', 'Madu', 'Minyak Goreng Filma', 'Kopi Kapal Api', 
            'Teh Celup Sariwangi', 'Sabun Mandi Lifebuoy', 'Pembersih Lantai Rinso', 
            'Pembersih Wajah POND\'S', 'Shampoo Pantene', 'Pasta Gigi Pepsodent', 
            'Deodoran Rexona', 'Tisu Toilet', 'Detergen OMO', 'Alat Pembersih Lantai', 
            'Kertas Minyak', 'Baterai AA', 'Lampu LED', 'Tas Plastik', 'Piring Plastik'
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
