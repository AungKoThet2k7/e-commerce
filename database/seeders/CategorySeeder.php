<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ["Electronics", "Clothing","Books", "Sports"];
        foreach($categories as $category) {
            Category::create([
                "name" => $category,
            ]);
        };
    }
}
