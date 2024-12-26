<?php

namespace Database\Seeders;

use App\Models\Cabang;
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
        if (Cabang::count() < 5) {
            $remaining = 5 - Cabang::count(); // Hitung sisa cabang yang perlu dibuat
            Cabang::factory()->count($remaining)->create();
        }
    }
}
