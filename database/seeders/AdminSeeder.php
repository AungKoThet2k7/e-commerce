<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create user
        $admin = User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('asdffdsa'),
        ]);

        // create role
        $roleAdmin = Role::create(['name' => 'Admin']);

        //give permission to role
        $roleAdmin->givePermissionTo(Permission::all());

        // asssign role to user
        $admin->assignRole($roleAdmin);
    }
}
