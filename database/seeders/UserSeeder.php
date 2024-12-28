<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
           'name' => 'Jayusman',
                'email' => 'jayusman@admin.com',
                'role' => 'owner',
                'cabang_id' => null,
                'created_at' => now(),
                'updated_at' => now(),

        ])->assignRole('owner');
        
        //Cabang 1
        User::factory()->create([
            'name' => 'Andi Wijaya',
            'email' => 'manager1@gmail.com',
            'role' => 'manager',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Budi Santoso',
            'email' => 'supervisor1@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Citra Dewi',
            'email' => 'pegawaigudang1@gmail.com',
            'role' => 'pegawai gudang',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Dian Pertiwi',
            'email' => 'kasir1@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


         //Cabang 2
        User::factory()->create([
            'name' => 'Eko Prasetyo',
            'email' => 'manager2@gmail.com',
            'role' => 'manager',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Fitri Handayani',
            'email' => 'supervisor2@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Gilang Ramadhan',
            'email' => 'pegawaigudang2@gmail.com',
            'role' => 'pegawai gudang',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Hesti Ayu',
            'email' => 'kasir2@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //Cabang 3
        User::factory()->create([
            'name' => 'Irfan Maulana',
            'email' => 'manager3@gmail.com',
            'role' => 'manager',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Joko Triyono',
            'email' => 'supervisor3@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Kiki Amalia',
            'email' => 'pegawaigudang3@gmail.com',
            'role' => 'pegawai gudang',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Lina Safitri',
            'email' => 'kasir3@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //Cabang 4
        User::factory()->create([
            'name' => 'Miko Andika',
            'email' => 'manager4@gmail.com',
            'role' => 'manager',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Nina Kartika',
            'email' => 'supervisor4@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Oni Suryani',
            'email' => 'pegawaigudang4@gmail.com',
            'role' => 'pegawai gudang',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Prita Melati',
            'email' => 'kasir4@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //Cabang 5
        User::factory()->create([
            'name' => 'Qori Ahmad',
            'email' => 'manager5@gmail.com',
            'role' => 'manager',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Rini Fatmawati',
            'email' => 'supervisor5@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Siti Hajar',
            'email' => 'pegawaigudang5@gmail.com',
            'role' => 'pegawai gudang',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Tono Setiawan',
            'email' => 'kasir5@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');
    }
}
