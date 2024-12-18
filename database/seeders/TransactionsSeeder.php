<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Cabang;
use App\Models\Product;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get a user, a cabang, and a product (You can customize this logic to fetch specific ones or create new ones)
        $user = User::first();
        $cabang = Cabang::first();
        $product = Product::first();

        // Insert sample transactions
        DB::table('transactions')->insert([
            'cabang_id' => $cabang->id,  // Use the ID of the cabang
            'user_id' => $user->id,  // Use the ID of the user
            'product_id' => $product->id,  // Use the ID of the product
            'quantity' => 2,  // Example quantity
            'price' => 50.00,  // Example price
            'subtotal' => 100.00,  // Example subtotal (quantity * price)
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // You can add more transactions here, for example, with different quantities or products
        DB::table('transactions')->insert([
            'cabang_id' => $cabang->id,
            'user_id' => $user->id,
            'product_id' => $product->id + 1,  // Use the next product
            'quantity' => 3,
            'price' => 30.00,
            'subtotal' => 90.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
