<?php

namespace Database\Seeders\Permissions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class ProductBrandPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'productbrands.index',
            'productbrands.create',
            'productbrands.store',
            'productbrands.show',
            'productbrands.edit',
            'productbrands.update',
            'productbrands.destroy',
            'productbrands.status',
            'productbrands.sort',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
