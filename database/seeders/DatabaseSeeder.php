<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Permissions\CategoryPermissionSeeder;
use Database\Seeders\Permissions\UserPermissionSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserPermissionSeeder::class,
            CategoryPermissionSeeder::class,
            AdminSeeder::class,
        ]);

        User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            SubCategorySeeder::class,
            ProductBrandSeeder::class,
        ]);

        Storage::disk('public')->deleteDirectory('category');
        Storage::disk('public')->deleteDirectory('sub-category');
        Storage::disk('public')->deleteDirectory('user');
        // echo "\e[92mStorage Cleaned\n";
    }
}
