<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stock_movements')->insert([
            // Data for Cabang 1
            [
                'cabang_id' => 1,
                'product_id' => 1,
                'user_id' => 4,
                'type' => 'in',
                'quantity' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 1,
                'product_id' => 2,
                'user_id' => 4,
                'type' => 'out',
                'quantity' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 1,
                'product_id' => 3,
                'user_id' => 4,
                'type' => 'in',
                'quantity' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 1,
                'product_id' => 4,
                'user_id' => 4,
                'type' => 'out',
                'quantity' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Data for Cabang 2
            [
                'cabang_id' => 2,
                'product_id' => 1,
                'user_id' => 8,
                'type' => 'in',
                'quantity' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 2,
                'product_id' => 2,
                'user_id' => 8,
                'type' => 'out',
                'quantity' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 2,
                'product_id' => 3,
                'user_id' => 8,
                'type' => 'in',
                'quantity' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 2,
                'product_id' => 4,
                'user_id' => 8,
                'type' => 'out',
                'quantity' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Data for Cabang 3
            [
                'cabang_id' => 3,
                'product_id' => 1,
                'user_id' => 12,
                'type' => 'in',
                'quantity' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 3,
                'product_id' => 2,
                'user_id' => 12,
                'type' => 'out',
                'quantity' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 3,
                'product_id' => 3,
                'user_id' => 12,
                'type' => 'in',
                'quantity' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 3,
                'product_id' => 4,
                'user_id' => 12,
                'type' => 'out',
                'quantity' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Data for Cabang 4
            [
                'cabang_id' => 4,
                'product_id' => 1,
                'user_id' => 16,
                'type' => 'in',
                'quantity' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 4,
                'product_id' => 2,
                'user_id' => 16,
                'type' => 'out',
                'quantity' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 4,
                'product_id' => 3,
                'user_id' => 16,
                'type' => 'in',
                'quantity' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 4,
                'product_id' => 4,
                'user_id' => 16,
                'type' => 'out',
                'quantity' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Data for Cabang 5
            [
                'cabang_id' => 5,
                'product_id' => 1,
                'user_id' => 20,
                'type' => 'in',
                'quantity' => 55,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 5,
                'product_id' => 2,
                'user_id' => 20,
                'type' => 'out',
                'quantity' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 5,
                'product_id' => 3,
                'user_id' => 20,
                'type' => 'in',
                'quantity' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 5,
                'product_id' => 4,
                'user_id' => 20,
                'type' => 'out',
                'quantity' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
