<?php

namespace Database\Seeders;

use App\Models\ProductBrand;
use Database\Factories\ProductBrandFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductBrand::factory(10)->create();
    }
}
