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
            'name' => 'manager',
            'email' => 'manager1@gmail.com',
            'role' => 'manager',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'supervisor',
            'email' => 'supervisor1@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'pegawai gudang',
            'email' => 'pegawaigudang1@gmail.com',
            'role' => 'pegawai-gudang',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'kasir',
            'email' => 'kasir1@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


         //Cabang 2
        User::factory()->create([
            'name' => 'manager',
            'email' => 'manager2@gmail.com',
            'role' => 'manager',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'supervisor',
            'email' => 'supervisor2@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'pegawai gudang',
            'email' => 'pegawaigudang2@gmail.com',
            'role' => 'pegawai-gudang',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'kasir',
            'email' => 'kasir2@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //Cabang 3
        User::factory()->create([
            'name' => 'manager',
            'email' => 'manager3@gmail.com',
            'role' => 'manager',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'supervisor',
            'email' => 'supervisor3@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'pegawai gudang',
            'email' => 'pegawaigudang3@gmail.com',
            'role' => 'pegawai-gudang',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'kasir',
            'email' => 'kasir3@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //Cabang 4
        User::factory()->create([
            'name' => 'manager',
            'email' => 'manager4@gmail.com',
            'role' => 'manager',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'supervisor',
            'email' => 'supervisor4@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'pegawai gudang',
            'email' => 'pegawaigudang4@gmail.com',
            'role' => 'pegawai-gudang',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'kasir',
            'email' => 'kasir4@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //Cabang 5
        User::factory()->create([
            'name' => 'manager',
            'email' => 'manager5@gmail.com',
            'role' => 'manager',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'supervisor',
            'email' => 'supervisor5@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'pegawai gudang',
            'email' => 'pegawaigudang5@gmail.com',
            'role' => 'pegawai-gudang',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'kasir',
            'email' => 'kasir5@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');






        
    }
}
