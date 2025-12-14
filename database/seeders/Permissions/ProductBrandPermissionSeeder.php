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
            'productbrand.index',
            'productbrand.create',
            'productbrand.store',
            'productbrand.show',
            'productbrand.edit',
            'productbrand.update',
            'productbrand.destroy',
            'productbrand.status',
            'productbrand.sort',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
