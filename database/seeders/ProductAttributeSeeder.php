<?php

namespace Database\Seeders;

use App\Models\ProductAttribute;
use Illuminate\Database\Seeder;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            'Size' => [
                'S',
                'M',
                'L',
                'XL',
            ],
            'Color' => [
                'White',
                'Blue',
                'Black',
                'Red',
            ],
            'Ram' => [
                '8GB',
                '16GB',
                '32GB',
                '64GB',
            ],
            'Storage' => [
                '64GB',
                '128GB',
                '256GB',
                '512GB',
            ],
        ];

        foreach($attributes as $attribute => $options) {
            $attribute = ProductAttribute::create([
                'name' => $attribute,
            ]);

            foreach($options as $option) {
                $attribute->productAttributeOptions()->create([
                    'name' => $option,
                ]);
            }
        }
    }
}
