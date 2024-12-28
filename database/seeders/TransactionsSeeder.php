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

        DB::table('transactions')->insert([
            // Data for cabang_id 1
            [
                'cabang_id' => 1, 
                'user_id' => $user->id,  
                'product_id' => 1,  
                'quantity' => 1,  
                'price' => 50.00,  
                'subtotal' => 50.00 * 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 1, 
                'user_id' => $user->id,  
                'product_id' => 2,  
                'quantity' => 2,  
                'price' => 50.00,  
                'subtotal' => 50.00 * 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 1, 
                'user_id' => $user->id,  
                'product_id' => 3,  
                'quantity' => 3,  
                'price' => 50.00,  
                'subtotal' => 50.00 * 3, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 1, 
                'user_id' => $user->id,  
                'product_id' => 4,  
                'quantity' => 4,  
                'price' => 50.00,  
                'subtotal' => 50.00 * 4, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            // Data for cabang_id 2
            [
                'cabang_id' => 2, 
                'user_id' => $user->id,  
                'product_id' => 5,  
                'quantity' => 1,  
                'price' => 60.00,  
                'subtotal' => 60.00 * 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 2, 
                'user_id' => $user->id,  
                'product_id' => 6,  
                'quantity' => 2,  
                'price' => 60.00,  
                'subtotal' => 60.00 * 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 2, 
                'user_id' => $user->id,  
                'product_id' => 7,  
                'quantity' => 3,  
                'price' => 60.00,  
                'subtotal' => 60.00 * 3, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 2, 
                'user_id' => $user->id,  
                'product_id' => 8,  
                'quantity' => 4,  
                'price' => 60.00,  
                'subtotal' => 60.00 * 4, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            // Data for cabang_id 3
            [
                'cabang_id' => 3, 
                'user_id' => $user->id,  
                'product_id' => 9,  
                'quantity' => 1,  
                'price' => 70.00,  
                'subtotal' => 70.00 * 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 3, 
                'user_id' => $user->id,  
                'product_id' => 10,  
                'quantity' => 2,  
                'price' => 70.00,  
                'subtotal' => 70.00 * 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 3, 
                'user_id' => $user->id,  
                'product_id' => 11,  
                'quantity' => 3,  
                'price' => 70.00,  
                'subtotal' => 70.00 * 3, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 3, 
                'user_id' => $user->id,  
                'product_id' => 12,  
                'quantity' => 4,  
                'price' => 70.00,  
                'subtotal' => 70.00 * 4, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            // Data for cabang_id 4
            [
                'cabang_id' => 4, 
                'user_id' => $user->id,  
                'product_id' => 13,  
                'quantity' => 1,  
                'price' => 80.00,  
                'subtotal' => 80.00 * 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 4, 
                'user_id' => $user->id,  
                'product_id' => 14,  
                'quantity' => 2,  
                'price' => 80.00,  
                'subtotal' => 80.00 * 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 4, 
                'user_id' => $user->id,  
                'product_id' => 15,  
                'quantity' => 3,  
                'price' => 80.00,  
                'subtotal' => 80.00 * 3, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 4, 
                'user_id' => $user->id,  
                'product_id' => 16,  
                'quantity' => 4,  
                'price' => 80.00,  
                'subtotal' => 80.00 * 4, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            // Data for cabang_id 5
            [
                'cabang_id' => 5, 
                'user_id' => $user->id,  
                'product_id' => 17,  
                'quantity' => 1,  
                'price' => 90.00,  
                'subtotal' => 90.00 * 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 5, 
                'user_id' => $user->id,  
                'product_id' => 18,  
                'quantity' => 2,  
                'price' => 90.00,  
                'subtotal' => 90.00 * 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 5, 
                'user_id' => $user->id,  
                'product_id' => 19,  
                'quantity' => 3,  
                'price' => 90.00,  
                'subtotal' => 90.00 * 3, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cabang_id' => 5, 
                'user_id' => $user->id,  
                'product_id' => 20,  
                'quantity' => 4,  
                'price' => 90.00,  
                'subtotal' => 90.00 * 4, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        

    }
}
