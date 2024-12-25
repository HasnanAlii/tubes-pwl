<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permission::create(['name' => 'edit_book']);
        // Permission::create(['name' => 'edit_user']);
        // Permission::create(['name' => 'view_book']);
        
        
        Role::create(['name' => 'owner']);
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'supervisor']);
        Role::create(['name' => 'pegawai-gudang']);
        Role::create(['name' => 'kasir']);

    }
}
