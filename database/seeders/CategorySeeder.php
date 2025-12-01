<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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
        $categories = ["Electronics", "Men Fashions","Books", "Women Fashions"];
        foreach($categories as $category) {
            Category::create([
                "name" => $category,
                "created_by" => User::inRandomOrder()->first()->id,
                "updated_by" => User::inRandomOrder()->first()->id,
            ]);
        };
    }
}
