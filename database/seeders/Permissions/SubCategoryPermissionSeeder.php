<?php

namespace Database\Seeders\Permissions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SubCategoryPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'subcategories.index',
            'subcategories.create',
            'subcategories.store',
            'subcategories.show',
            'subcategories.edit',
            'subcategories.update',
            'subcategories.destroy',
            'subcategories.status',
            'subcategories.sort',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
