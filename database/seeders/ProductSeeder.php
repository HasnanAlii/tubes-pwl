<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'cabang_id' => 1,
                'name' => 'Sabun Cair',
                'sku' => 'SB123',
                'price' => 15000.00,
                'stock' => 50,
                'stock_min' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 1,
                'name' => 'Minuman Soda',
                'sku' => 'MS456',
                'price' => 12000.00,
                'stock' => 100,
                'stock_min' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 2,
                'name' => 'Minuman Soda',
                'sku' => 'MS454',
                'price' => 12000.00,
                'stock' => 100,
                'stock_min' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
