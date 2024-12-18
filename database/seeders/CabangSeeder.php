<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabang')->insert([
            [
                'name' => 'Cabang A',
                'address' => 'Jl. ABC, Kota A',
                'phone' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cabang B',
                'address' => 'Jl. DEF, Kota B',
                'phone' => '081234567891',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cabang C',
                'address' => 'Jl. DEF, Kota B',
                'phone' => '081234567891',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cabang D',
                'address' => 'Jl. DEF, Kota B',
                'phone' => '081234567891',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cabang E',
                'address' => 'Jl. DEF, Kota B',
                'phone' => '081234567891',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
